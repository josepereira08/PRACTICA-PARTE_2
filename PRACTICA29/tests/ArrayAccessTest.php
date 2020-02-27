<?php

use jp\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_offset_get()
    {
        $user = new UserTest([
            'name' => 'Jose pereira',
            'email' => 'jpyftsunami08@gmail.com',
            'website' => 'www.jpereira.com.ve',
        ]);

        $this->assertSame('Jose pereira', $user['name']); 

        $this->assertSame('jpyftsunami08@gmail.com', $user['email']); 

        $this->assertSame('www.jpereira.com.ve', $user['website']); 
    }

    public function test_offset_exists()
    {
        $user = new UserTest([
            'name' => 'Jose pereira',
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));
    }

    /** @test **/
    function it_set_and_get_values_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Jose pereira';

        $this->assertSame('Jose pereira', $user['name']);
    }

    /** @test **/
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = new UserTest;

        $user['name'] = 'Jose pereira';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);        

        $this->assertFalse(isset($user['name']));
    }

}

class UserTest extends Model implements ArrayAccess {

    // isset - empty
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    // unset
    public function offsetUnset($offset)
    {
        unset ($this->$offset);
    }

}








