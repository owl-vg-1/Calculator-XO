<?php

declare(strict_types=1);

use App\Censor;
use PHPUnit\Framework\TestCase;

class CensorTest extends TestCase
{
    public $censor;

    protected function setUp(): void
    {
        $this->censor = new Censor(['плохо', 'редиска']);
    }

    function testMethods()
    {
        $this->assertEquals(
            ['плохо' => 2],
            $this->censor->check('плохо плохо'),
            'wrong check'
        );

        $this->assertEquals(
            ['плохо' => 1, 'редиска' => 2],
            $this->censor->check('плохо редиска редиска'),
            'wrong check'
        );

        $this->assertEquals(
            ['плохо' => 2, 'редиска' => 4],
            $this->censor->check('плохо редиска редиска плохо редиска редиска'),
            'wrong check'
        );

        $this->assertEquals(
            [],
            $this->censor->check('ssgsg'),
            'wrong check'
        );

    }

    protected function tearDown(): void
    {
    }
}
