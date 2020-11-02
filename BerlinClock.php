<?php

class BerlinClock
{

    public function berlinClock() : String
    {

    }

    public function simpleMinute(String $minute) : String
    {
        $patern0_5 = '/^.[0,5]{1}$/';
        $patern1_6 = '/^.[1,6]{1}$/';
        $patern2_7 = '/^.[2,7]{1}$/';
        $patern3_8 = '/^.[3,8]{1}$/';
        $patern4_9 = '/^.[4,9]{1}$/';

        if(preg_match($patern0_5, $minute)) return  "OOOO";
        else if(preg_match($patern1_6, $minute)) return  "YOOO";
        else if(preg_match($patern2_7, $minute)) return  "YYOO";
        else if(preg_match($patern3_8, $minute)) return  "YYYO";
        else if(preg_match($patern4_9, $minute)) return  "YYYY";
    }

    public function blockOf5Minutes(String $minute) : String
    {
        $patern0 = '/^[0].$/';
        $patern1 = '/^[1].$/';
        $patern2 = '/^[2].$/';
        $patern3 = '/^[3].$/';
        $patern4 = '/^[4].$/';
        $patern5 = '/^[5].$/';
        $patern0To4 = '/^.[0-4]{1}$/';
        $patern5To9 = '/^.[5-9]{1}$/';

        if(preg_match($patern0, $minute)) {
            if(preg_match($patern0To4, $minute)) return "OOOOOOOOOOO";
            else if(preg_match($patern5To9, $minute)) return "YOOOOOOOOOO";
        }else
            if(preg_match($patern1, $minute)) {
            if(preg_match($patern0To4, $minute)) return "YYOOOOOOOOO";
            else if(preg_match($patern5To9, $minute)) return "YYROOOOOOOO";
        }else
            if(preg_match($patern2, $minute)) {
            if(preg_match($patern0To4, $minute)) return "YYRYOOOOOOO";
            else if(preg_match($patern5To9, $minute)) return "YYRYYOOOOOO";
        }else
            if(preg_match($patern3, $minute)) {
            if(preg_match($patern0To4, $minute)) return "YYRYYROOOOO";
            else if(preg_match($patern5To9, $minute)) return "YYRYYRYOOOO";
        }else
            if(preg_match($patern4, $minute)) {
            if(preg_match($patern0To4, $minute)) return "YYRYYRYYOOO";
            else if(preg_match($patern5To9, $minute)) return "YYRYYRYYROO";
        }else
            if(preg_match($patern5, $minute)) {
            if(preg_match($patern0To4, $minute)) return "YYRYYRYYRYO";
            else if(preg_match($patern5To9, $minute)) return "YYRYYRYYRYY";
        }
    }

}

