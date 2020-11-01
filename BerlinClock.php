<?php

class BerlinClock
{

    public function simpleMinute(String $minute) : String
    {
        if($minute == "00") return  "OOOO";
        if($minute == "01") return  "YOOO";
        if($minute == "02") return  "YYOO";
        if($minute == "03") return  "YYYO";
        if($minute == "04") return  "YYYY";

    }

}

