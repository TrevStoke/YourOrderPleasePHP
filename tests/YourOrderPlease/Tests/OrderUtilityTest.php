<?php

namespace YourOrderPlease\Tests;

use YourOrderPlease\Order;
use PHPUnit\Framework\TestCase;

class OrderUtilityTest extends TestCase
{

    public function testGetValueFromToken()
    {
        $expected = 8;
        $actual = Order::getValueFromToken("sail8or");
        $this->assertEquals($expected, $actual);
    }

    public function testGetArrayFromString()
    {
        $input = "this is a string";
        $result = Order::getArrayFromString($input);
        $this->assertIsArray($result);
        $this->assertEquals(4, count($result));
    }

    public function testWordValueAsKeyArray()
    {
        $input = ["sail8or"];
        $expected = [8 => "sail8or"];
        $result = Order::getValueAsArrayKeyFromWords($input);
        $this->assertIsArray($result);
        $this->assertArrayHasKey(8, $result);
    }
}
