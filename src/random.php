<?php

use Stringizer\Stringizer;

class random
{

    public static function alpha($lenght=10){
        $s = new Stringizer("");

        return $s->randomAlpha($lenght);
    }

    public static function numeric(){
        $s = new Stringizer("");

        return $s->randomNumeric();
    }

    public static function alpha_numeric(){
        $s = new Stringizer("");

        return $s->randomAlphanumeric();
    }

}

?>