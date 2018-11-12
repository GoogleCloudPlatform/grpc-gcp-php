<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1\PartOfSpeech;

/**
 * The distinction between the speaker, second person, third person, etc.
 *
 * Protobuf type <code>google.cloud.language.v1.PartOfSpeech.Person</code>
 */
class Person
{
    /**
     * Person is not applicable in the analyzed language or is not predicted.
     *
     * Generated from protobuf enum <code>PERSON_UNKNOWN = 0;</code>
     */
    const PERSON_UNKNOWN = 0;
    /**
     * First
     *
     * Generated from protobuf enum <code>FIRST = 1;</code>
     */
    const FIRST = 1;
    /**
     * Second
     *
     * Generated from protobuf enum <code>SECOND = 2;</code>
     */
    const SECOND = 2;
    /**
     * Third
     *
     * Generated from protobuf enum <code>THIRD = 3;</code>
     */
    const THIRD = 3;
    /**
     * Reflexive
     *
     * Generated from protobuf enum <code>REFLEXIVE_PERSON = 4;</code>
     */
    const REFLEXIVE_PERSON = 4;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Person::class, \Google\Cloud\Language\V1\PartOfSpeech_Person::class);
