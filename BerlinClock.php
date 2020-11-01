<?php

class BerlinClock
{

    public function simpleMinute(String $minute) : String
    {
        if($minute == "00") return  "OOOO";
        else if($minute == "01") return  "YOOO";
        else if($minute == "02") return  "YYOO";
        else if($minute == "03") return  "YYYO";
        else if($minute == "04") return  "YYYY";

    }

    public function blockOf5Minutes(String $minute) : String
    {
        if($minute == "00") return "OOOOOOOOOOO";
    }

}

