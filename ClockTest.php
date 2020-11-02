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

    public function test_simpleMinute_given02m_shouldReturnYYOO(){
        $actual = $this->actSimpleMinute("02");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given03m_shouldReturnYYYO(){
        $actual = $this->actSimpleMinute("03");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given04m_shouldReturnYYYY(){
        $actual = $this->actSimpleMinute("04");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinute_given05m_shouldReturnOOOO(){
        $actual = $this->actSimpleMinute("05");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_simpleMinute_given06m_shouldReturnYOOO(){
        $actual = $this->actSimpleMinute("06");

        $this->assertEquals("YOOO", $actual);
    }

    public function test_simpleMinute_given07m_shouldReturnYYOO(){
        $actual = $this->actSimpleMinute("07");

        $this->assertEquals("YYOO", $actual);
    }

    public function test_simpleMinute_given08m_shouldReturnYYYO(){
        $actual = $this->actSimpleMinute("08");

        $this->assertEquals("YYYO", $actual);
    }

    public function test_simpleMinute_given09m_shouldReturnYYYY(){
        $actual = $this->actSimpleMinute("09");

        $this->assertEquals("YYYY", $actual);
    }

    public function test_simpleMinute_given10m_shouldReturnOOOO(){
        $actual = $this->actSimpleMinute("10");

        $this->assertEquals("OOOO", $actual);
    }

    public function test_blockOf5Minutes_given00to04m_shouldReturnOOOOOOOOOOO(){
        $actual = $this->actBlockOf5Minutes("00");

        $this->assertEquals("OOOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given05to09m_shouldReturnYOOOOOOOOOO(){
        $actual = $this->actBlockOf5Minutes("05");

        $this->assertEquals("YOOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given10to14m_shouldReturnYYOOOOOOOOO(){
        $actual = $this->actBlockOf5Minutes("11");

        $this->assertEquals("YYOOOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given15to19m_shouldReturnYYROOOOOOOO(){
        $actual = $this->actBlockOf5Minutes("16");

        $this->assertEquals("YYROOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given20to24m_shouldReturnYYRYOOOOOOO(){
        $actual = $this->actBlockOf5Minutes("22");

        $this->assertEquals("YYRYOOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given25to29m_shouldReturnYYRYYOOOOOO(){
        $actual = $this->actBlockOf5Minutes("27");

        $this->assertEquals("YYRYYOOOOOO", $actual);
    }

    public function test_blockOf5Minutes_given30to34m_shouldReturnYYRYYROOOOO(){
        $actual = $this->actBlockOf5Minutes("33");

        $this->assertEquals("YYRYYROOOOO", $actual);
    }

    public function test_blockOf5Minutes_given35to39m_shouldReturnYYRYYRYOOOO(){
        $actual = $this->actBlockOf5Minutes("38");

        $this->assertEquals("YYRYYRYOOOO", $actual);
    }

    public function test_blockOf5Minutes_given40to44m_shouldReturnYYRYYRYYOOO(){
        $actual = $this->actBlockOf5Minutes("44");

        $this->assertEquals("YYRYYRYYOOO", $actual);
    }

    public function test_blockOf5Minutes_given45to49m_shouldReturnYYRYYRYYROO(){
        $actual = $this->actBlockOf5Minutes("49");

        $this->assertEquals("YYRYYRYYROO", $actual);
    }

    public function test_blockOf5Minutes_given50to54m_shouldReturnYYRYYRYYRYO(){
        $actual = $this->actBlockOf5Minutes("50");

        $this->assertEquals("YYRYYRYYRYO", $actual);
    }

    public function test_blockOf5Minutes_given55to59m_shouldReturnYYRYYRYYRYY(){
        $actual = $this->actBlockOf5Minutes("55");

        $this->assertEquals("YYRYYRYYRYY", $actual);
    }








    private function actSimpleMinute(String $minute) : String{
        return $this->berlinClock->simpleMinute($minute);
    }

    private function actBlockOf5Minutes(String $minute) : String{
        return $this->berlinClock->blockOf5Minutes($minute);
    }

}