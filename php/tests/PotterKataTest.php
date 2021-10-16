<?php

namespace kata;

use PHPUnit\Framework\TestCase;

class PotterKataTest extends TestCase
{

    public function testCorrectAssertion() {
        $this->assertEquals(3, 1 + 2);
    }

    public function testPriceForEmptyBasketShouldBeZero() : void {
        $potter = new PotterKata();
        $this->assertEquals(0, $potter->getPrice([]));
    }

}
