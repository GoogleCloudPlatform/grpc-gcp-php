<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/containeranalysis/v1alpha1/provenance.proto

namespace GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1;

class Provenance
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Devtools\Containeranalysis\V1Alpha1\SourceContext::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0abc110a3b676f6f676c652f646576746f6f6c732f636f6e7461696e6572" .
            "616e616c797369732f7631616c706861312f70726f76656e616e63652e70" .
            "726f746f122a676f6f676c652e646576746f6f6c732e636f6e7461696e65" .
            "72616e616c797369732e7631616c706861311a3f676f6f676c652f646576" .
            "746f6f6c732f636f6e7461696e6572616e616c797369732f7631616c7068" .
            "61312f736f757263655f636f6e746578742e70726f746f1a1f676f6f676c" .
            "652f70726f746f6275662f74696d657374616d702e70726f746f2296050a" .
            "0f4275696c6450726f76656e616e6365120a0a0269641801200128091212" .
            "0a0a70726f6a6563745f696418022001280912450a08636f6d6d616e6473" .
            "18052003280b32332e676f6f676c652e646576746f6f6c732e636f6e7461" .
            "696e6572616e616c797369732e7631616c706861312e436f6d6d616e6412" .
            "4d0a0f6275696c745f61727469666163747318062003280b32342e676f6f" .
            "676c652e646576746f6f6c732e636f6e7461696e6572616e616c79736973" .
            "2e7631616c706861312e4172746966616374122f0a0b6372656174655f74" .
            "696d6518072001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d70122e0a0a73746172745f74696d6518082001280b321a2e" .
            "676f6f676c652e70726f746f6275662e54696d657374616d70122f0a0b66" .
            "696e6973685f74696d6518092001280b321a2e676f6f676c652e70726f74" .
            "6f6275662e54696d657374616d70120f0a0763726561746f72180b200128" .
            "0912130a0b6c6f67735f6275636b6574180d20012809124d0a11736f7572" .
            "63655f70726f76656e616e6365180e2001280b32322e676f6f676c652e64" .
            "6576746f6f6c732e636f6e7461696e6572616e616c797369732e7631616c" .
            "706861312e536f7572636512120a0a747269676765725f6964180f200128" .
            "0912640a0d6275696c645f6f7074696f6e7318102003280b324d2e676f6f" .
            "676c652e646576746f6f6c732e636f6e7461696e6572616e616c79736973" .
            "2e7631616c706861312e4275696c6450726f76656e616e63652e4275696c" .
            "644f7074696f6e73456e74727912170a0f6275696c6465725f7665727369" .
            "6f6e1811200128091a330a114275696c644f7074696f6e73456e74727912" .
            "0b0a036b6579180120012809120d0a0576616c75651802200128093a0238" .
            "0122fa040a06536f7572636512530a0e73746f726167655f736f75726365" .
            "18012001280b32392e676f6f676c652e646576746f6f6c732e636f6e7461" .
            "696e6572616e616c797369732e7631616c706861312e53746f7261676553" .
            "6f757263654800124d0a0b7265706f5f736f7572636518022001280b3236" .
            "2e676f6f676c652e646576746f6f6c732e636f6e7461696e6572616e616c" .
            "797369732e7631616c706861312e5265706f536f757263654800125a0a17" .
            "61727469666163745f73746f726167655f736f7572636518042001280b32" .
            "392e676f6f676c652e646576746f6f6c732e636f6e7461696e6572616e61" .
            "6c797369732e7631616c706861312e53746f72616765536f757263651257" .
            "0a0b66696c655f68617368657318032003280b32422e676f6f676c652e64" .
            "6576746f6f6c732e636f6e7461696e6572616e616c797369732e7631616c" .
            "706861312e536f757263652e46696c65486173686573456e747279124a0a" .
            "07636f6e7465787418072001280b32392e676f6f676c652e646576746f6f" .
            "6c732e636f6e7461696e6572616e616c797369732e7631616c706861312e" .
            "536f75726365436f6e7465787412560a136164646974696f6e616c5f636f" .
            "6e746578747318082003280b32392e676f6f676c652e646576746f6f6c73" .
            "2e636f6e7461696e6572616e616c797369732e7631616c706861312e536f" .
            "75726365436f6e746578741a690a0f46696c65486173686573456e747279" .
            "120b0a036b657918012001280912450a0576616c756518022001280b3236" .
            "2e676f6f676c652e646576746f6f6c732e636f6e7461696e6572616e616c" .
            "797369732e7631616c706861312e46696c654861736865733a0238014208" .
            "0a06736f7572636522510a0a46696c6548617368657312430a0966696c65" .
            "5f6861736818012003280b32302e676f6f676c652e646576746f6f6c732e" .
            "636f6e7461696e6572616e616c797369732e7631616c706861312e486173" .
            "682280010a044861736812470a047479706518012001280e32392e676f6f" .
            "676c652e646576746f6f6c732e636f6e7461696e6572616e616c79736973" .
            "2e7631616c706861312e486173682e4861736854797065120d0a0576616c" .
            "756518022001280c22200a08486173685479706512080a044e4f4e451000" .
            "120a0a06534841323536100122430a0d53746f72616765536f7572636512" .
            "0e0a066275636b6574180120012809120e0a066f626a6563741802200128" .
            "0912120a0a67656e65726174696f6e1803200128032280010a0a5265706f" .
            "536f7572636512120a0a70726f6a6563745f696418012001280912110a09" .
            "7265706f5f6e616d6518022001280912150a0b6272616e63685f6e616d65" .
            "180320012809480012120a087461675f6e616d6518042001280948001214" .
            "0a0a636f6d6d69745f7368611805200128094800420a0a08726576697369" .
            "6f6e225d0a07436f6d6d616e64120c0a046e616d65180120012809120b0a" .
            "03656e76180220032809120c0a0461726773180320032809120b0a036469" .
            "72180420012809120a0a02696418052001280912100a08776169745f666f" .
            "7218062003280922450a084172746966616374120c0a046e616d65180120" .
            "01280912100a08636865636b73756d180220012809120a0a026964180320" .
            "012809120d0a056e616d6573180420032809428c010a25636f6d2e676f6f" .
            "676c652e636f6e7461696e6572616e616c797369732e7631616c70686131" .
            "50015a5b676f6f676c652e676f6c616e672e6f72672f67656e70726f746f" .
            "2f676f6f676c65617069732f646576746f6f6c732f636f6e7461696e6572" .
            "616e616c797369732f7631616c706861313b636f6e7461696e6572616e61" .
            "6c79736973a20203474341620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

