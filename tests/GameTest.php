<?php

declare(strict_types=1);

use App\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{

    public $game;

    protected function setUp(): void
    {
        $this->game = new Game(3);
    }

    function testMethods()
    {

        $this->assertEquals(
            [['-', '-', '-'],
             ['-', '-', '-'],
             ['-', '-', '-']],
             $this->game->createArray(),
            'wrong createArray'
        );

        $this->assertEquals(
            [['-', '-', '-'],
             ['-', '-', '-'],
             ['-', '-', '-']],
             $this->game->setArray(),
            'wrong setArray'
        );

        $this->assertEquals(
            $this->array_game,
            $this->game->getArray([ ['-', '-', '-'],
                                    ['-', '-', '-'],
                                    ['-', '-', '-']]),
            'wrong getArray'
        );

        // $this->assertEquals(
        //     [['X', '-', '-'],
        //      ['-', '-', '-'],
        //      ['-', '-', '-']],
        //      $this->array_game->game->move_cross(0, 0),
        //     'wrong moveCross'
        // );



    }

    protected function tearDown(): void
    {
    }
}
