<?php

namespace kata;

use PHPUnit\Framework\TestCase;

class PotterKataTest extends TestCase
{

    public function testCorrectAssertion() {
        $this->assertEquals(3, 1 + 2);
    }

    public function testWrongAssertion() : void {
        $this->assertEquals(5, 2 + 2);
    }

}
