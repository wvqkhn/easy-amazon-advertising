<?php

class AesEncryptorTest extends \PHPUnit\Framework\TestCase
{
    public function testDecrypt()
    {
        $decrypted = '234234xxxxxxx2342sdfs';
        $original = '18600311028';

//        $encryptor = new AesEncryptor();
//        $result = $encryptor->decrypt($decrypted);
        // 断言结果和$original是一致的
        $this->assertEquals(123123, 123);
//        var_dump(1232);
    }
}
