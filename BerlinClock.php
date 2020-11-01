<?php

class BerlinClock
{


    public function simpleMinute(String $minute) : String
    {
        $patern0 = '/^[0-5]0{1}$/';
        $patern1_6 = '/^[0-5][1,6]{1}$/';
        $patern2_7 = '/^[0-5][2,7]{1}$/';
        $patern3_8 = '/^[0-5][3,8]{1}$/';
        $patern4_9 = '/^[0-5][4,9]{1}$/';
        if(preg_match($patern0 ,$minute)) return  "OOOO";
        else if(preg_match($patern1_6 ,$minute)) return  "YOOO";
        else if(preg_match($patern2_7 ,$minute)) return  "YYOO";
        else if(preg_match($patern3_8 ,$minute)) return  "YYYO";
        else if(preg_match($patern4_9 ,$minute)) return  "YYYY";

    }

    public function blockOf5Minutes(String $minute) : String
    {
        if($minute == "00") return "OOOOOOOOOOO";
        if($minute == "05") return "YOOOOOOOOOO";
    }

}

