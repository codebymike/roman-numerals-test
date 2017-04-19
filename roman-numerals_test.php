<?php

require_once "roman-numerals.php";

class RomanTest extends PHPUnit\Framework\TestCase
{
    public function test_it_returns_I_for_1()
    {
        $this->assertSame('I', toRoman(1));
    }

    /* More tests are needed... */
}
