<?php

require_once "roman-numerals.php";

class RomanTest extends PHPUnit\Framework\TestCase
{
    public function test1()
    {
        $this->assertSame('I', toRoman(1));
    }

    /* More tests are needed... */
}
