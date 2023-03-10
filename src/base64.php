<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

use Stringizer\Stringizer;

class base64{

    public static function encode($string)
    {
        $s=new Stringizer($string);

        return $s->base64Encode();
    }

    public static function decode($string)
    {
        $s=new Stringizer($string);

        return $s->base64Decode();
    }

}

?>