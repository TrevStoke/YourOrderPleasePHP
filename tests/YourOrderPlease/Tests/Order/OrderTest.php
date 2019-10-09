<?php

namespace YourOrderPlease\Tests\Order;

use YourOrderPlease\Order;
use PHPUnit\Framework\TestCase;

class OrderTest extends TestCase
{

    public function testEmptyStringReturnsEmptyString()
    {
        $this->assertEquals("", Order::order(""));
    }

    public function testUnorderedInputOne()
    {
        $expected = "Fo1r the2 g3ood 4of th5e pe6ople";
        $actual = Order::order("4of Fo1r pe6ople g3ood th5e the2");
        $this->assertEquals($expected, $actual);
    }

    public function testDrunkenSailor()
    {
        $expected = "wha1t sh2all 3we d4o w5ith a6 dru7nken s8ailor";
        $actual = Order::order("d4o dru7nken sh2all w5ith s8ailor wha1t 3we a6");
        $this->assertEquals($expected, $actual);
    }

    public function testJustNumbers()
    {
        $expected = "1 2 3 4 5 6 7 8 9";
        $actual = Order::order("3 6 4 2 8 7 5 1 9");
        $this->assertEquals($expected, $actual);
    }

    public function testDoubleDigitValues()
    {
        $expected = "one1 two2 three3 four4 five5 six6 seven7 eight8 nine9 ten10 eleven11 twelve12";
        $actual = Order::order("twelve12 eleven11 ten10 nine9 eight8 seven7 six6 five5 four4 three3 two2 one1");
        $this->assertEquals($expected, $actual);
    }
}
