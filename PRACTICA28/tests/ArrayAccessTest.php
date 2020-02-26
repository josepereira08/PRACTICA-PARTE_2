<?php

use jp\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_a_model_has_array_access()
    {
        $user = new UserTest([
            'name' => 'Jose Pereira',
            'email' => 'jpyftsunami08@gmail.com',
            'website' => 'www.j-pereira.com.ve',
        ]);

        $this->assertSame('Jose Pereira', $user['name']); 

        $this->assertSame('jpyftsunami08@gmail.com', $user['email']); 

        $this->assertSame('www.j-pereira.com.ve', $user['website']); 
    }

}

class UserTest extends Model implements ArrayAccess {

    // isset - empty
    public function offsetExists($offset)
    {
        
    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {
        
    }

    // unset
    public function offsetUnset($offset)
    {
        
    }

}








