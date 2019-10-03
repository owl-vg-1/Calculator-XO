<?php

declare(strict_types=1);

use App\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calc;

    protected function setUp(): void
    {
        $this->calc = new Calculator();
    }

    function testMethods()
    {

        $this->assertEquals(
            10,
            $this->calc->sum(2, 3, 5),
            'wrong sum'
        );

        $this->assertEquals(
            27,
            $this->calc->pow(3, 3),
            'wrong pow'
        );

        $this->assertEquals(
            9,
            $this->calc->mult(3, 3),
            'wrong mult'
        );

        $this->assertEquals(
            0,
            $this->calc->minus(3, 3),
            'wrong minus'
        );

        $this->assertEquals(
            1,
            $this->calc->per(3, 2),
            'wrong per'
        );

        $this->assertEquals(
            1,
            $this->calc->div(3, 3),
            'wrong div'
        );

        $this->assertIsFloat(
            $this->calc->minus(3, 3),
            'wrong Float'
        );

        $this->assertTrue(
            $this->calc->equal(3, 3),
            'wrong equal'
        );

        $this->assertTrue(
            $this->calc->more(4, 3),
            'wrong more'
        );

        $this->assertTrue(
            $this->calc->less(2, 3),
            'wrong less'
        );

        $this->assertEquals(
            [2,3],
            $this->calc->sort([2,3]),
            'wrong sort'
        );

        $this->assertEquals(
            [3,2],
            $this->calc->reverse([2,3]),
            'wrong reverse'
        );
    }

    protected function tearDown(): void
    {
    }
}
