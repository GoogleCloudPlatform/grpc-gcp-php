<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/sourcerepo/v1/sourcerepo.proto

namespace GPBMetadata\Google\Devtools\Sourcerepo\V1;

class Sourcerepo
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Iam\V1\IamPolicy::initOnce();
        \GPBMetadata\Google\Iam\V1\Policy::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaf0e0a2e676f6f676c652f646576746f6f6c732f736f75726365726570" .
            "6f2f76312f736f757263657265706f2e70726f746f121d676f6f676c652e" .
            "646576746f6f6c732e736f757263657265706f2e76311a1e676f6f676c65" .
            "2f69616d2f76312f69616d5f706f6c6963792e70726f746f1a1a676f6f67" .
            "6c652f69616d2f76312f706f6c6963792e70726f746f1a1b676f6f676c65" .
            "2f70726f746f6275662f656d7074792e70726f746f22730a045265706f12" .
            "0c0a046e616d65180120012809120c0a0473697a65180220012803120b0a" .
            "0375726c18032001280912420a0d6d6972726f725f636f6e666967180420" .
            "01280b322b2e676f6f676c652e646576746f6f6c732e736f757263657265" .
            "706f2e76312e4d6972726f72436f6e66696722460a0c4d6972726f72436f" .
            "6e666967120b0a0375726c18012001280912120a0a776562686f6f6b5f69" .
            "6418022001280912150a0d6465706c6f795f6b65795f6964180320012809" .
            "221e0a0e4765745265706f52657175657374120c0a046e616d6518012001" .
            "280922470a104c6973745265706f7352657175657374120c0a046e616d65" .
            "18012001280912110a09706167655f73697a6518022001280512120a0a70" .
            "6167655f746f6b656e18032001280922600a114c6973745265706f735265" .
            "73706f6e736512320a057265706f7318012003280b32232e676f6f676c65" .
            "2e646576746f6f6c732e736f757263657265706f2e76312e5265706f1217" .
            "0a0f6e6578745f706167655f746f6b656e18022001280922560a11437265" .
            "6174655265706f52657175657374120e0a06706172656e74180120012809" .
            "12310a047265706f18022001280b32232e676f6f676c652e646576746f6f" .
            "6c732e736f757263657265706f2e76312e5265706f22210a1144656c6574" .
            "655265706f52657175657374120c0a046e616d6518012001280932f8070a" .
            "0a536f757263655265706f1293010a094c6973745265706f73122f2e676f" .
            "6f676c652e646576746f6f6c732e736f757263657265706f2e76312e4c69" .
            "73745265706f73526571756573741a302e676f6f676c652e646576746f6f" .
            "6c732e736f757263657265706f2e76312e4c6973745265706f7352657370" .
            "6f6e7365222382d3e493021d121b2f76312f7b6e616d653d70726f6a6563" .
            "74732f2a7d2f7265706f731285010a074765745265706f122d2e676f6f67" .
            "6c652e646576746f6f6c732e736f757263657265706f2e76312e47657452" .
            "65706f526571756573741a232e676f6f676c652e646576746f6f6c732e73" .
            "6f757263657265706f2e76312e5265706f222682d3e4930220121e2f7631" .
            "2f7b6e616d653d70726f6a656374732f2a2f7265706f732f2a2a7d129001" .
            "0a0a4372656174655265706f12302e676f6f676c652e646576746f6f6c73" .
            "2e736f757263657265706f2e76312e4372656174655265706f5265717565" .
            "73741a232e676f6f676c652e646576746f6f6c732e736f75726365726570" .
            "6f2e76312e5265706f222b82d3e4930225221d2f76312f7b706172656e74" .
            "3d70726f6a656374732f2a7d2f7265706f733a047265706f127e0a0a4465" .
            "6c6574655265706f12302e676f6f676c652e646576746f6f6c732e736f75" .
            "7263657265706f2e76312e44656c6574655265706f526571756573741a16" .
            "2e676f6f676c652e70726f746f6275662e456d707479222682d3e4930220" .
            "2a1e2f76312f7b6e616d653d70726f6a656374732f2a2f7265706f732f2a" .
            "2a7d1285010a0c53657449616d506f6c69637912222e676f6f676c652e69" .
            "616d2e76312e53657449616d506f6c696379526571756573741a152e676f" .
            "6f676c652e69616d2e76312e506f6c696379223a82d3e4930234222f2f76" .
            "312f7b7265736f757263653d70726f6a656374732f2a2f7265706f732f2a" .
            "2a7d3a73657449616d506f6c6963793a012a1282010a0c47657449616d50" .
            "6f6c69637912222e676f6f676c652e69616d2e76312e47657449616d506f" .
            "6c696379526571756573741a152e676f6f676c652e69616d2e76312e506f" .
            "6c696379223782d3e4930231122f2f76312f7b7265736f757263653d7072" .
            "6f6a656374732f2a2f7265706f732f2a2a7d3a67657449616d506f6c6963" .
            "7912ab010a125465737449616d5065726d697373696f6e7312282e676f6f" .
            "676c652e69616d2e76312e5465737449616d5065726d697373696f6e7352" .
            "6571756573741a292e676f6f676c652e69616d2e76312e5465737449616d" .
            "5065726d697373696f6e73526573706f6e7365224082d3e493023a22352f" .
            "76312f7b7265736f757263653d70726f6a656374732f2a2f7265706f732f" .
            "2a2a7d3a7465737449616d5065726d697373696f6e733a012a427f0a2163" .
            "6f6d2e676f6f676c652e646576746f6f6c732e736f757263657265706f2e" .
            "7631420f536f757263655265706f50726f746f50015a47676f6f676c652e" .
            "676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561706973" .
            "2f646576746f6f6c732f736f757263657265706f2f76313b736f75726365" .
            "7265706f620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

