<?php
 
use Komputronika\Kalkulator\Kalkulator;
 
class KalkulatorTest extends PHPUnit_Framework_TestCase {
 
    public function testTambah()
    {
        $obj = new Kalkulator;
        $this->assertEquals(444, $obj->tambah(123,321));
        $this->assertEquals(80, $obj->kurang(100,20));
        $this->assertEquals(49, $obj->kali(7,7));
        $this->assertEquals(25, $obj->bagi(125,5));
    }
}
