<?php

namespace Acme\Gym\Test;

use PHPUnit\Framework\TestCase;

class FauxTest extends TestCase
{
    /**
     * @test
     */
    public function test_qui_echoue(): void
    {
        $this->fail();
    }
}
