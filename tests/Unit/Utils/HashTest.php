<?php

namespace MemcachedManager\Tests\Unit\Utils;


use MemcachedManager\Tests\Unit\UnitTestCase;
use MemcachedManager\Utils\Hash;

class HashTest extends UnitTestCase
{
    public function testEncode()
    {
        $this->assertEquals( 'F1rLAG_caKql7vEQl-gj1g82_AIyxuAQt1rOX4-K7nQ=', Hash::encode( 'is it still snowing?' ) );
    }

    public function testDecode()
    {
        $this->assertEquals( 'is it still snowing?', Hash::decode( 'F1rLAG_caKql7vEQl-gj1g82_AIyxuAQt1rOX4-K7nQ=' ) );
    }
}