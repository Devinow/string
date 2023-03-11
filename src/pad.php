<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Devinow\String;


use Stringizer\Stringizer;


class pad
{

    public static function both($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padBoth($start,$end);
    }

    public static function left($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padLeft($start,$end);
    }

    public static function right($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->padRight($start,$end);
    }

}

?>