<?php

class BerlinClock
{

    public function simpleMinute(String $minute) : String
    {
        if($minute == "00") return  "OOOO";
        else if($minute == "01" || $minute == "06") return  "YOOO";
        else if($minute == "02" || $minute == "07") return  "YYOO";
        else if($minute == "03" || $minute == "08") return  "YYYO";
        else if($minute == "04" || $minute == "09") return  "YYYY";

    }

    public function blockOf5Minutes(String $minute) : String
    {
        if($minute == "00") return "OOOOOOOOOOO";
        if($minute == "05") return "YOOOOOOOOOO";
    }

}

