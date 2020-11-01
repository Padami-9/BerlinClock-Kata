<?php
require "vendor/autoload.php";
require "BerlinClock.php";

use PHPUnit\Framework\TestCase;

class ClockTest extends TestCase
{

    private $berlinClock;

    protected function setUp(): void
    {
        parent::setUp();
        $this->berlinClock = new BerlinClock();
    }


    public function test_simpleMinute_given00m_shouldReturnOOOO(){
        $actual = $this->actSimpleMinute("00");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleMinute_given01m_shouldReturnYOOO(){
        $actual = $this->actSimpleMinute("01");

        $this->assertEquals("YOOO", $actual);
    }











    private function actSimpleMinute(String $minute): String{
        return $this->berlinClock->simpleMinute($minute);
    }

}