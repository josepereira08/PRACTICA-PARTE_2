<?php

use jp\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    protected function newModel(array $attributes = [])
    {
        return new class($attributes) extends Model { };
    }

    public function test_offset_get()
    {
        $user = $this->newModel([
            'name' => 'Jose pereira',
            'email' => 'jpftsunami08@gmail.com',
            'website' => 'www.jpereira.com.ve',
        ]);

        $this->assertSame('Jose pereira', $user['name']); 

        $this->assertSame('jpftsunami08@gmail.com', $user['email']); 

        $this->assertSame('www.jpereira.com.ve', $user['website']); 
    }

    public function test_offset_exists()
    {
        $user = $this->newModel([
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
        $user = $this->newModel();

        $user['name'] = 'Jose pereira';

        $this->assertSame('Jose pereira', $user['name']);
    }

    /** @test **/
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = $this->newModel();

        $user['name'] = 'Jose pereira';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);        

        $this->assertFalse(isset($user['name']));
    }

}








