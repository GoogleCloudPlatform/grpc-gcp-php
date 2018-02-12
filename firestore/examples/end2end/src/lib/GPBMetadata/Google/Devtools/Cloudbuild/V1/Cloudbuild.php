<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace GPBMetadata\Google\Devtools\Cloudbuild\V1;

class Cloudbuild
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Cloud\Audit\AuditLog::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad1390a2e676f6f676c652f646576746f6f6c732f636c6f75646275696c" .
            "642f76312f636c6f75646275696c642e70726f746f121d676f6f676c652e" .
            "646576746f6f6c732e636c6f75646275696c642e76311a22676f6f676c65" .
            "2f636c6f75642f61756469742f61756469745f6c6f672e70726f746f1a23" .
            "676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e" .
            "70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f" .
            "6e2e70726f746f1a1b676f6f676c652f70726f746f6275662f656d707479" .
            "2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374" .
            "616d702e70726f746f22330a1152657472794275696c6452657175657374" .
            "12120a0a70726f6a6563745f6964180120012809120a0a02696418022001" .
            "2809227b0a1652756e4275696c6454726967676572526571756573741212" .
            "0a0a70726f6a6563745f696418012001280912120a0a747269676765725f" .
            "696418022001280912390a06736f7572636518032001280b32292e676f6f" .
            "676c652e646576746f6f6c732e636c6f75646275696c642e76312e526570" .
            "6f536f7572636522430a0d53746f72616765536f75726365120e0a066275" .
            "636b6574180120012809120e0a066f626a65637418022001280912120a0a" .
            "67656e65726174696f6e180320012803228d010a0a5265706f536f757263" .
            "6512120a0a70726f6a6563745f696418012001280912110a097265706f5f" .
            "6e616d6518022001280912150a0b6272616e63685f6e616d651803200128" .
            "09480012120a087461675f6e616d65180420012809480012140a0a636f6d" .
            "6d69745f7368611805200128094800120b0a03646972180720012809420a" .
            "0a087265766973696f6e229c010a06536f7572636512460a0e73746f7261" .
            "67655f736f7572636518022001280b322c2e676f6f676c652e646576746f" .
            "6f6c732e636c6f75646275696c642e76312e53746f72616765536f757263" .
            "65480012400a0b7265706f5f736f7572636518032001280b32292e676f6f" .
            "676c652e646576746f6f6c732e636c6f75646275696c642e76312e526570" .
            "6f536f75726365480042080a06736f7572636522680a0a4275696c74496d" .
            "616765120c0a046e616d65180120012809120e0a06646967657374180320" .
            "012809123c0a0b707573685f74696d696e6718042001280b32272e676f6f" .
            "676c652e646576746f6f6c732e636c6f75646275696c642e76312e54696d" .
            "655370616e22f8010a094275696c6453746570120c0a046e616d65180120" .
            "012809120b0a03656e76180220032809120c0a0461726773180320032809" .
            "120b0a03646972180420012809120a0a02696418052001280912100a0877" .
            "6169745f666f7218062003280912120a0a656e747279706f696e74180720" .
            "01280912120a0a7365637265745f656e7618082003280912360a07766f6c" .
            "756d657318092003280b32252e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e566f6c756d6512370a0674696d696e6718" .
            "0a2001280b32272e676f6f676c652e646576746f6f6c732e636c6f756462" .
            "75696c642e76312e54696d655370616e22240a06566f6c756d65120c0a04" .
            "6e616d65180120012809120c0a0470617468180220012809225f0a075265" .
            "73756c747312390a06696d6167657318022003280b32292e676f6f676c65" .
            "2e646576746f6f6c732e636c6f75646275696c642e76312e4275696c7449" .
            "6d61676512190a116275696c645f737465705f696d616765731803200328" .
            "0922a3090a054275696c64120a0a02696418012001280912120a0a70726f" .
            "6a6563745f6964181020012809123b0a0673746174757318022001280e32" .
            "2b2e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e76" .
            "312e4275696c642e53746174757312150a0d7374617475735f6465746169" .
            "6c18182001280912350a06736f7572636518032001280b32252e676f6f67" .
            "6c652e646576746f6f6c732e636c6f75646275696c642e76312e536f7572" .
            "636512370a057374657073180b2003280b32282e676f6f676c652e646576" .
            "746f6f6c732e636c6f75646275696c642e76312e4275696c645374657012" .
            "370a07726573756c7473180a2001280b32262e676f6f676c652e64657674" .
            "6f6f6c732e636c6f75646275696c642e76312e526573756c7473122f0a0b" .
            "6372656174655f74696d6518062001280b321a2e676f6f676c652e70726f" .
            "746f6275662e54696d657374616d70122e0a0a73746172745f74696d6518" .
            "072001280b321a2e676f6f676c652e70726f746f6275662e54696d657374" .
            "616d70122f0a0b66696e6973685f74696d6518082001280b321a2e676f6f" .
            "676c652e70726f746f6275662e54696d657374616d70122a0a0774696d65" .
            "6f7574180c2001280b32192e676f6f676c652e70726f746f6275662e4475" .
            "726174696f6e120e0a06696d61676573180d2003280912130a0b6c6f6773" .
            "5f6275636b6574181320012809124a0a11736f757263655f70726f76656e" .
            "616e636518152001280b322f2e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e536f7572636550726f76656e616e636512" .
            "180a106275696c645f747269676765725f6964181620012809123c0a076f" .
            "7074696f6e7318172001280b322b2e676f6f676c652e646576746f6f6c73" .
            "2e636c6f75646275696c642e76312e4275696c644f7074696f6e73120f0a" .
            "076c6f675f75726c181920012809124e0a0d737562737469747574696f6e" .
            "73181d2003280b32372e676f6f676c652e646576746f6f6c732e636c6f75" .
            "646275696c642e76312e4275696c642e537562737469747574696f6e7345" .
            "6e747279120c0a0474616773181f2003280912360a077365637265747318" .
            "202003280b32252e676f6f676c652e646576746f6f6c732e636c6f756462" .
            "75696c642e76312e53656372657412400a0674696d696e6718212003280b" .
            "32302e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e" .
            "76312e4275696c642e54696d696e67456e7472791a340a12537562737469" .
            "747574696f6e73456e747279120b0a036b6579180120012809120d0a0576" .
            "616c75651802200128093a0238011a560a0b54696d696e67456e74727912" .
            "0b0a036b657918012001280912360a0576616c756518022001280b32272e" .
            "676f6f676c652e646576746f6f6c732e636c6f75646275696c642e76312e" .
            "54696d655370616e3a023801227f0a0653746174757312120a0e53544154" .
            "55535f554e4b4e4f574e1000120a0a065155455545441001120b0a07574f" .
            "524b494e471002120b0a07535543434553531003120b0a074641494c5552" .
            "45100412120a0e494e5445524e414c5f4552524f521005120b0a0754494d" .
            "454f55541006120d0a0943414e43454c4c4544100722680a0854696d6553" .
            "70616e122e0a0a73746172745f74696d6518012001280b321a2e676f6f67" .
            "6c652e70726f746f6275662e54696d657374616d70122c0a08656e645f74" .
            "696d6518022001280b321a2e676f6f676c652e70726f746f6275662e5469" .
            "6d657374616d70224d0a164275696c644f7065726174696f6e4d65746164" .
            "61746112330a056275696c6418012001280b32242e676f6f676c652e6465" .
            "76746f6f6c732e636c6f75646275696c642e76312e4275696c6422de020a" .
            "10536f7572636550726f76656e616e6365124d0a177265736f6c7665645f" .
            "73746f726167655f736f7572636518032001280b322c2e676f6f676c652e" .
            "646576746f6f6c732e636c6f75646275696c642e76312e53746f72616765" .
            "536f7572636512470a147265736f6c7665645f7265706f5f736f75726365" .
            "18062001280b32292e676f6f676c652e646576746f6f6c732e636c6f7564" .
            "6275696c642e76312e5265706f536f7572636512540a0b66696c655f6861" .
            "7368657318042003280b323f2e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e536f7572636550726f76656e616e63652e" .
            "46696c65486173686573456e7472791a5c0a0f46696c6548617368657345" .
            "6e747279120b0a036b657918012001280912380a0576616c756518022001" .
            "280b32292e676f6f676c652e646576746f6f6c732e636c6f75646275696c" .
            "642e76312e46696c654861736865733a02380122440a0a46696c65486173" .
            "68657312360a0966696c655f6861736818012003280b32232e676f6f676c" .
            "652e646576746f6f6c732e636c6f75646275696c642e76312e4861736822" .
            "730a0448617368123a0a047479706518012001280e322c2e676f6f676c65" .
            "2e646576746f6f6c732e636c6f75646275696c642e76312e486173682e48" .
            "61736854797065120d0a0576616c756518022001280c22200a0848617368" .
            "5479706512080a044e4f4e451000120a0a065348413235361001229a010a" .
            "0653656372657412140a0c6b6d735f6b65795f6e616d6518012001280912" .
            "480a0a7365637265745f656e7618032003280b32342e676f6f676c652e64" .
            "6576746f6f6c732e636c6f75646275696c642e76312e5365637265742e53" .
            "6563726574456e76456e7472791a300a0e536563726574456e76456e7472" .
            "79120b0a036b6579180120012809120d0a0576616c756518022001280c3a" .
            "023801225d0a124372656174654275696c645265717565737412120a0a70" .
            "726f6a6563745f696418012001280912330a056275696c6418022001280b" .
            "32242e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e" .
            "76312e4275696c6422310a0f4765744275696c645265717565737412120a" .
            "0a70726f6a6563745f6964180120012809120a0a02696418022001280922" .
            "5e0a114c6973744275696c64735265717565737412120a0a70726f6a6563" .
            "745f696418012001280912110a09706167655f73697a6518022001280512" .
            "120a0a706167655f746f6b656e180320012809120e0a0666696c74657218" .
            "082001280922630a124c6973744275696c6473526573706f6e736512340a" .
            "066275696c647318012003280b32242e676f6f676c652e646576746f6f6c" .
            "732e636c6f75646275696c642e76312e4275696c6412170a0f6e6578745f" .
            "706167655f746f6b656e18022001280922340a1243616e63656c4275696c" .
            "645265717565737412120a0a70726f6a6563745f6964180120012809120a" .
            "0a02696418022001280922a1030a0c4275696c6454726967676572120a0a" .
            "02696418012001280912130a0b6465736372697074696f6e180a20012809" .
            "12430a10747269676765725f74656d706c61746518072001280b32292e67" .
            "6f6f676c652e646576746f6f6c732e636c6f75646275696c642e76312e52" .
            "65706f536f7572636512350a056275696c6418042001280b32242e676f6f" .
            "676c652e646576746f6f6c732e636c6f75646275696c642e76312e427569" .
            "6c64480012120a0866696c656e616d651808200128094800122f0a0b6372" .
            "656174655f74696d6518052001280b321a2e676f6f676c652e70726f746f" .
            "6275662e54696d657374616d7012100a0864697361626c65641809200128" .
            "0812550a0d737562737469747574696f6e73180b2003280b323e2e676f6f" .
            "676c652e646576746f6f6c732e636c6f75646275696c642e76312e427569" .
            "6c64547269676765722e537562737469747574696f6e73456e7472791a34" .
            "0a12537562737469747574696f6e73456e747279120b0a036b6579180120" .
            "012809120d0a0576616c75651802200128093a02380142100a0e6275696c" .
            "645f74656d706c617465226d0a194372656174654275696c645472696767" .
            "65725265717565737412120a0a70726f6a6563745f696418012001280912" .
            "3c0a077472696767657218022001280b322b2e676f6f676c652e64657674" .
            "6f6f6c732e636c6f75646275696c642e76312e4275696c64547269676765" .
            "7222400a164765744275696c64547269676765725265717565737412120a" .
            "0a70726f6a6563745f696418012001280912120a0a747269676765725f69" .
            "64180220012809222e0a184c6973744275696c6454726967676572735265" .
            "717565737412120a0a70726f6a6563745f6964180120012809225a0a194c" .
            "6973744275696c645472696767657273526573706f6e7365123d0a087472" .
            "69676765727318012003280b322b2e676f6f676c652e646576746f6f6c73" .
            "2e636c6f75646275696c642e76312e4275696c645472696767657222430a" .
            "1944656c6574654275696c64547269676765725265717565737412120a0a" .
            "70726f6a6563745f696418012001280912120a0a747269676765725f6964" .
            "1802200128092281010a195570646174654275696c645472696767657252" .
            "65717565737412120a0a70726f6a6563745f696418012001280912120a0a" .
            "747269676765725f6964180220012809123c0a0774726967676572180320" .
            "01280b322b2e676f6f676c652e646576746f6f6c732e636c6f7564627569" .
            "6c642e76312e4275696c645472696767657222cc050a0c4275696c644f70" .
            "74696f6e73124c0a16736f757263655f70726f76656e616e63655f686173" .
            "6818012003280e322c2e676f6f676c652e646576746f6f6c732e636c6f75" .
            "646275696c642e76312e486173682e486173685479706512590a17726571" .
            "7565737465645f7665726966795f6f7074696f6e18022001280e32382e67" .
            "6f6f676c652e646576746f6f6c732e636c6f75646275696c642e76312e42" .
            "75696c644f7074696f6e732e5665726966794f7074696f6e124d0a0c6d61" .
            "6368696e655f7479706518032001280e32372e676f6f676c652e64657674" .
            "6f6f6c732e636c6f75646275696c642e76312e4275696c644f7074696f6e" .
            "732e4d616368696e655479706512140a0c6469736b5f73697a655f676218" .
            "0620012803125b0a13737562737469747574696f6e5f6f7074696f6e1804" .
            "2001280e323e2e676f6f676c652e646576746f6f6c732e636c6f75646275" .
            "696c642e76312e4275696c644f7074696f6e732e53756273746974757469" .
            "6f6e4f7074696f6e125c0a146c6f675f73747265616d696e675f6f707469" .
            "6f6e18052001280e323e2e676f6f676c652e646576746f6f6c732e636c6f" .
            "75646275696c642e76312e4275696c644f7074696f6e732e4c6f67537472" .
            "65616d696e674f7074696f6e222e0a0c5665726966794f7074696f6e1210" .
            "0a0c4e4f545f56455249464945441000120c0a0856455249464945441001" .
            "22430a0b4d616368696e6554797065120f0a0b554e535045434946494544" .
            "100012100a0c4e315f484947484350555f38100112110a0d4e315f484947" .
            "484350555f3332100222350a12537562737469747574696f6e4f7074696f" .
            "6e120e0a0a4d5553545f4d415443481000120f0a0b414c4c4f575f4c4f4f" .
            "5345100122470a124c6f6753747265616d696e674f7074696f6e12120a0e" .
            "53545245414d5f44454641554c541000120d0a0953545245414d5f4f4e10" .
            "01120e0a0a53545245414d5f4f4646100232b30e0a0a436c6f7564427569" .
            "6c641290010a0b4372656174654275696c6412312e676f6f676c652e6465" .
            "76746f6f6c732e636c6f75646275696c642e76312e437265617465427569" .
            "6c64526571756573741a1d2e676f6f676c652e6c6f6e6772756e6e696e67" .
            "2e4f7065726174696f6e222f82d3e493022922202f76312f70726f6a6563" .
            "74732f7b70726f6a6563745f69647d2f6275696c64733a056275696c6412" .
            "8f010a084765744275696c64122e2e676f6f676c652e646576746f6f6c73" .
            "2e636c6f75646275696c642e76312e4765744275696c6452657175657374" .
            "1a242e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e" .
            "76312e4275696c64222d82d3e493022712252f76312f70726f6a65637473" .
            "2f7b70726f6a6563745f69647d2f6275696c64732f7b69647d129b010a0a" .
            "4c6973744275696c647312302e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e4c6973744275696c647352657175657374" .
            "1a312e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e" .
            "76312e4c6973744275696c6473526573706f6e7365222882d3e493022212" .
            "202f76312f70726f6a656374732f7b70726f6a6563745f69647d2f627569" .
            "6c6473129f010a0b43616e63656c4275696c6412312e676f6f676c652e64" .
            "6576746f6f6c732e636c6f75646275696c642e76312e43616e63656c4275" .
            "696c64526571756573741a242e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e4275696c64223782d3e4930231222c2f76" .
            "312f70726f6a656374732f7b70726f6a6563745f69647d2f6275696c6473" .
            "2f7b69647d3a63616e63656c3a012a1295010a0a52657472794275696c64" .
            "12302e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e" .
            "76312e52657472794275696c64526571756573741a1d2e676f6f676c652e" .
            "6c6f6e6772756e6e696e672e4f7065726174696f6e223682d3e493023022" .
            "2b2f76312f70726f6a656374732f7b70726f6a6563745f69647d2f627569" .
            "6c64732f7b69647d3a72657472793a012a12b0010a124372656174654275" .
            "696c645472696767657212382e676f6f676c652e646576746f6f6c732e63" .
            "6c6f75646275696c642e76312e4372656174654275696c64547269676765" .
            "72526571756573741a2b2e676f6f676c652e646576746f6f6c732e636c6f" .
            "75646275696c642e76312e4275696c6454726967676572223382d3e49302" .
            "2d22222f76312f70726f6a656374732f7b70726f6a6563745f69647d2f74" .
            "726967676572733a077472696767657212ae010a0f4765744275696c6454" .
            "72696767657212352e676f6f676c652e646576746f6f6c732e636c6f7564" .
            "6275696c642e76312e4765744275696c6454726967676572526571756573" .
            "741a2b2e676f6f676c652e646576746f6f6c732e636c6f75646275696c64" .
            "2e76312e4275696c6454726967676572223782d3e4930231122f2f76312f" .
            "70726f6a656374732f7b70726f6a6563745f69647d2f7472696767657273" .
            "2f7b747269676765725f69647d12b2010a114c6973744275696c64547269" .
            "676765727312372e676f6f676c652e646576746f6f6c732e636c6f756462" .
            "75696c642e76312e4c6973744275696c6454726967676572735265717565" .
            "73741a382e676f6f676c652e646576746f6f6c732e636c6f75646275696c" .
            "642e76312e4c6973744275696c645472696767657273526573706f6e7365" .
            "222a82d3e493022412222f76312f70726f6a656374732f7b70726f6a6563" .
            "745f69647d2f7472696767657273129f010a1244656c6574654275696c64" .
            "5472696767657212382e676f6f676c652e646576746f6f6c732e636c6f75" .
            "646275696c642e76312e44656c6574654275696c64547269676765725265" .
            "71756573741a162e676f6f676c652e70726f746f6275662e456d70747922" .
            "3782d3e49302312a2f2f76312f70726f6a656374732f7b70726f6a656374" .
            "5f69647d2f74726967676572732f7b747269676765725f69647d12bd010a" .
            "125570646174654275696c645472696767657212382e676f6f676c652e64" .
            "6576746f6f6c732e636c6f75646275696c642e76312e5570646174654275" .
            "696c6454726967676572526571756573741a2b2e676f6f676c652e646576" .
            "746f6f6c732e636c6f75646275696c642e76312e4275696c645472696767" .
            "6572224082d3e493023a322f2f76312f70726f6a656374732f7b70726f6a" .
            "6563745f69647d2f74726967676572732f7b747269676765725f69647d3a" .
            "077472696767657212ac010a0f52756e4275696c64547269676765721235" .
            "2e676f6f676c652e646576746f6f6c732e636c6f75646275696c642e7631" .
            "2e52756e4275696c6454726967676572526571756573741a1d2e676f6f67" .
            "6c652e6c6f6e6772756e6e696e672e4f7065726174696f6e224382d3e493" .
            "023d22332f76312f70726f6a656374732f7b70726f6a6563745f69647d2f" .
            "74726967676572732f7b747269676765725f69647d3a72756e3a06736f75" .
            "726365426b0a18636f6d2e676f6f676c652e636c6f75646275696c642e76" .
            "3150015a47676f6f676c652e676f6c616e672e6f72672f67656e70726f74" .
            "6f2f676f6f676c65617069732f646576746f6f6c732f636c6f7564627569" .
            "6c642f76313b636c6f75646275696c64a20203474342620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

