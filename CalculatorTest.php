<?php
namespace Calculator;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp() :void
    {
        require_once 'Calculator.php';
        $this->calculator = new Calculator();
    }

    protected function tearDown() :void
    {
        $this->calculator = null;
    }

    public function testAdd()
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 4);
        $this->assertEquals(1, $result);
    }

    public function testmultiply()
    {
        $result = $this->calculator->multiply(2, 2);
        $this->assertEquals(4, $result);
    }

    public function testDivide()
    {
        $result = $this->calculator->divide(9, 3);
        $this->assertEquals(3, $result);
    }

    public function testIsMultiple()
    {
        $result = $this->calculator->isMultiple(15, 5);
        $this->assertEquals(0, $result);
    }
}
