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
        $actual = $this->actSimpleMinute("0");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleMinute_given01m_shouldReturnYOOO(){
        $actual = $this->actSimpleMinute("1");

        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinute_given02m_shouldReturnYYOO(){
        $actual = $this->actSimpleMinute("2");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given03m_shouldReturnYYYO(){
        $actual = $this->actSimpleMinute("3");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given04m_shouldReturnYYYY(){
        $actual = $this->actSimpleMinute("4");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinute_given06m_shouldReturnYOOO(){
        $actual = $this->actSimpleMinute("6");

        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinute_given07m_shouldReturnYYOO(){
        $actual = $this->actSimpleMinute("7");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given08m_shouldReturnYYYO(){
        $actual = $this->actSimpleMinute("8");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given09m_shouldReturnYYYY(){
        $actual = $this->actSimpleMinute("9");

        $this->assertEquals("YYYY", $actual);
    }

    /*public function test_simpleMinute_given11m_shouldReturnYOOO(){
        $actual = $this->actSimpleMinute("11");

        $this->assertEquals("YOOO", $actual);
    }*/

    public function test_blockOf5Minutes_given00m_shouldReturnOOOOOOOOOOO(){
        $actual = $this->berlinClock->blockOf5Minutes("00");

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given05m_shouldReturnYOOOOOOOOOO(){
        $actual = $this->berlinClock->blockOf5Minutes("05");

        $this->assertEquals("YOOOOOOOOOO", $actual);
    }









    private function actSimpleMinute(String $minute): String{
        return $this->berlinClock->simpleMinute($minute);
    }


}