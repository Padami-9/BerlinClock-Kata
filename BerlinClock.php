<?php

class BerlinClock
{



    //$patern0 = '/^[0-5]0{1}$/';
    //$patern1_6 = '/^[0-5][1,6]{1}$/';
    //$patern2_7 = '/^[0-5][2,7]{1}$/';
    //$patern3_8 = '/^[0-5][3,8]{1}$/';
    //$patern4_9 = '/^[0-5][4,9]{1}$/';





    public function simpleMinute(String $minute) : String
    {
        if($minute == "0") return  "OOOO";
        else if($minute == "1" || $minute == "6") return  "YOOO";
        else if($minute == "2" || $minute == "7") return  "YYOO";
        else if($minute == "3" || $minute == "8") return  "YYYO";
        else if($minute == "4" || $minute == "9") return  "YYYY";
    }

    public function blockOf5Minutes(String $minute) : String
    {
        if(preg_match('/^[0].$/', $minute)) {
            if(preg_match('/^.[0]$/', $minute)) return "OOOOOOOOOOO";
            else if(preg_match('/^.[5]$/', $minute)) return "YOOOOOOOOOO";
        }
    }

}

