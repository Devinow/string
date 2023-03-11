<?php

/*
 * Copyright (c) Devinow (https://devinow.xyz/)
 */

namespace Devinow\String;


use Stringizer\Stringizer;


class is
{

    public static function ascii($string,$status=false)
    {
        $s = new Stringizer($string);

        return $s->isAscii($status);
    }

    public static function alpha($string)
    {
        $s = new Stringizer($string);

        return $s->isAlpha();
    }

    public static function alpha_numeric($string)
    {
        $s = new Stringizer($string);

        return $s->isAlphaNumeric();
    }

    public static function alpha_numeric_space($string)
    {
        $s = new Stringizer($string);

        return $s->isAlphaNumericSpace();
    }

    public static function alpha_numeric_space_dash($string)
    {
        $s = new Stringizer($string);

        return $s->isAlphaNumericSpaceDash();
    }

    public static function base64($string)
    {
        $s = new Stringizer($string);

        return $s->isBase64();
    }

    public static function blank($string)
    {
        $s = new Stringizer($string);

        return $s->isBlank();
    }

    public static function date($string,$zone='Asia/Tehran')
    {
        date_default_timezone_set($zone);

        $s = new Stringizer($string);

        return $s->isDate();
    }

    public static function decimal($string)
    {
        $s = new Stringizer($string);

        return $s->isDecimal();
    }

    public static function email($string)
    {
        $s = new Stringizer($string);

        return $s->isEmail();
    }

    public static function _empty($string)
    {
        $s = new Stringizer($string);

        return $s->isEmpty();
    }

    public static function hash($string,$hash)
    {
        $s = new Stringizer($string);

        return $s->isHash($hash);
    }

    public static function hex_color($string)
    {
        $s = new Stringizer($string);

        return $s->isHexColor();
    }

    public static function hex_decimal($string)
    {
        $s = new Stringizer($string);

        return $s->isHexDecimal();
    }

    public static function isbn10($string)
    {
        $s = new Stringizer($string);

        return $s->isIsbn10();
    }

    public static function isbn13($string)
    {
        $s = new Stringizer($string);

        return $s->isIsbn13();
    }

    public static function ipv4($string)
    {
        $s = new Stringizer($string);

        return $s->isIpv4();
    }

    public static function ipv6($string)
    {
        $s = new Stringizer($string);

        return $s->isIpv6();
    }

    public static function json($string)
    {
        $s = new Stringizer($string);

        return $s->isJson();
    }

    public static function number($string)
    {
        $s = new Stringizer($string);

        return $s->isNumber();
    }

    public static function multibyte($string)
    {
        $s = new Stringizer($string);

        return $s->isMultiByte();
    }

    public static function lat($string)
    {
        $s = new Stringizer($string);

        return $s->isLatitude();
    }

    public static function lon($string)
    {
        $s = new Stringizer($string);

        return $s->isLongitude();
    }

    public static function rgb($string)
    {
        $s = new Stringizer($string);

        return $s->isRgbColor();
    }

    public static function semver($string)
    {
        $s = new Stringizer($string);

        return $s->isSemver();
    }

    public static function url($string)
    {
        $s = new Stringizer($string);

        return $s->isUrl();
    }

}

?>