<?php
namespace FireStore;

use Google\Cloud\Firestore\V1beta1\StructuredQuery;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_Projection;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldReference;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_CollectionSelector;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldFilter;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_FieldFilter_Operator;
use Google\Cloud\Firestore\V1beta1\Value;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_Filter;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_CompositeFilter;
use Google\Cloud\Firestore\V1beta1\StructuredQuery_CompositeFilter_Operator;

class StructuredQueryBuilder
{

    const DOCUMENT_NAME_FORMAT = 'projects/%s/databases/%s/documents/%s/%s';

    /**
     * array of fields to display if appropriatedocument is found
     *
     * @var array
     */
    private $select;

    /**
     * WHERE conditions in the format
     * $where = [
     *     'name' => 'DaisyRidley',
     *     'age' => 25,
     * ];
     *
     * @var array
     */
    private $where;

    /**
     *
     * @var string
     */
    private $collectionId;

    /**
     *
     * @var string
     */
    private $docId;

    public function __construct($collectionId, $select = [], $where = [])
    {
        $this->select = $select;
        $this->where = $where;
        $this->collectionId = $collectionId;
    }

    /**
     *
     * @return \Google\Cloud\Firestore\V1beta1\StructuredQuery
     */
    public function build()
    {
        $query = new StructuredQuery();
        // Example: SELECT name, age FROM users WHERE age=20 AND name="john"
        
        // SELECT name, age
        $fields = [];
        $projection = new StructuredQuery_Projection();
        foreach ($this->select as $fieldName) {
            $field = new StructuredQuery_FieldReference();
            $field->setFieldPath($fieldName);
            $fields[] = $field;
        }
        
        
        $projection->setFields($fields);
        $query->setSelect($projection);
        
        
        // FROM
        $collection = new StructuredQuery_CollectionSelector();
        $collection->setCollectionId($this->collectionId);
        $query->setFrom([$collection]);
        
        // WHERE
        $fieldTypes = [];
        foreach ($this->where as $fieldName => $value) {
            $fieldTypes[$fieldName] = (is_numeric($value)) ? 'integer_value' : 'string_value';
        }
        
        $filters = [];
        foreach ($this->where as $name => $value) {
            $filter = new StructuredQuery_FieldFilter();
            $nameField = new StructuredQuery_FieldReference();
            $nameField->setFieldPath($name);
            
            $filter->setField($nameField);
            
            $filter->setOp(StructuredQuery_FieldFilter_Operator::EQUAL);
            
            $valueField = new Value();
            $type = $fieldTypes[$name];
            $method = 'set'.  ucfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $type))));
            if (empty($method)) {
                $method = "setStringValue";
            }
            $valueField->$method($value);
            $filter->setValue($valueField);
            
            $f = new StructuredQuery_Filter();
            $f->setFieldFilter($filter);
            
            $filters[] = $f;
        }
        
        $compositeFilter = new StructuredQuery_CompositeFilter();
        $compositeFilter->setOp(StructuredQuery_CompositeFilter_Operator::PBAND);
        $compositeFilter->setFilters($filters);
        $whereFilter = new StructuredQuery_Filter();
        $whereFilter->setCompositeFilter($compositeFilter);
        
        $query->setWhere($whereFilter);
        
        return $query;
    }
}
