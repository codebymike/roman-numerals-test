<?php
use PHPUnit\Framework\TestCase as TCase;
require_once "roman-numerals.php";

class RomanTest extends TCase
{
    private $Converter;
    protected function setUp(){
        $this->Converter = new RomanConverter();
    }
    
    public function test_it_returns_I_for_1()
    {
        $this->assertSame('I', $this->Converter->toRoman(1));
        $this->assertSame(1, $this->Converter->toNumber('I'));
    }
    
    public function test_it_returns_IV_for_4()
    {
        $this->assertSame('IV', $this->Converter->toRoman(4));
        $this->assertSame(4, $this->Converter->toNumber('IV'));
    }
    
    public function test_it_returns_V_for_5()
    {
        $this->assertSame('V', $this->Converter->toRoman(5));
        $this->assertSame(5, $this->Converter->toNumber('V'));
    }
    
    public function test_it_returns_IX_for_9()
    {
        $this->assertSame('IX', $this->Converter->toRoman(9));
        $this->assertSame(9, $this->Converter->toNumber('IX'));
    }
    
    public function test_it_returns_X_for_10()
    {
        $this->assertSame('X', $this->Converter->toRoman(10));
        $this->assertSame(10, $this->Converter->toNumber('X'));
    }
    
    public function test_it_returns_XL_for_40()
    {
        $this->assertSame('XL', $this->Converter->toRoman(40));
        $this->assertSame(40, $this->Converter->toNumber('XL'));
    }
    
    public function test_it_returns_L_for_50()
    {
        $this->assertSame('L', $this->Converter->toRoman(50));
        $this->assertSame(50, $this->Converter->toNumber('L'));
    }
    
    public function test_it_returns_XC_for_90()
    {
        $this->assertSame('XC', $this->Converter->toRoman(90));
        $this->assertSame(90, $this->Converter->toNumber('XC'));
    }
    
    public function test_it_returns_C_for_100()
    {
        $this->assertSame('C', $this->Converter->toRoman(100));
        $this->assertSame(100, $this->Converter->toNumber('C'));
    }
    
    public function test_it_returns_CD_for_400()
    {
        $this->assertSame('CD', $this->Converter->toRoman(400));
        $this->assertSame(400, $this->Converter->toNumber('CD'));
    }
    
    public function test_it_returns_D_for_500()
    {
        $this->assertSame('D', $this->Converter->toRoman(500));
        $this->assertSame(500, $this->Converter->toNumber('D'));
    }
    
    public function test_it_returns_CM_for_900()
    {
        $this->assertSame('CM', $this->Converter->toRoman(900));
        $this->assertSame(900, $this->Converter->toNumber('CM'));
    }
    
    public function test_it_returns_M_for_1000()
    {
        $this->assertSame('M', $this->Converter->toRoman(1000));
        $this->assertSame(1000, $this->Converter->toNumber('M'));
    }

    /* Random Number Tests */ 
    
     public function test_it_returns_DXCIII_for_593()
    {
        $this->assertSame('DXCIII', $this->Converter->toRoman(593));
        $this->assertSame(1, $this->Converter->toNumber('I'));
    }
    
    public function test_it_returns_MDCCXXX_for_1730()
    {
        $this->assertSame('MDCCXXX', $this->Converter->toRoman(1730));
        $this->assertSame(1, $this->Converter->toNumber('I'));
    }
}
