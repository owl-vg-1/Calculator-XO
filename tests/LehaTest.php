<?php

declare(strict_types=1);

use App\ArrayEntity;
use PHPUnit\Framework\TestCase;

class LehaTest extends TestCase
{
    public $array;

    protected function setUp(): void
    {
        $this->array = new ArrayEntity();
    }

    function testMethods()
    {
        $this->assertEquals(
            [1, 3, 3],
            $this->array->plus1([1, 2, 3]),
            'wrong plus1'
        );

        $this->assertEquals(
            [1, 6, 3],
            $this->array->plus1([1, 5, 3]),
            'wrong plus1'
        );

        $this->assertEquals(
            [0, 1, 0],
            $this->array->plus1([0, 0, 0]),
            'wrong plus1'
        );

        $this->assertEquals(
            [1, 2, 1],
            $this->array->plus1([1, 1, 1]),
            'wrong plus1'
        );
        
        $this->assertEquals(
            [3, 4, 3],
            $this->array->plus1([3, 3, 3]),
            'wrong plus1'
        );
    }

    protected function tearDown(): void
    {
    }
}
