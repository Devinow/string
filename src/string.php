<?php

use Stringizer\Stringizer;

class str{

    public static function between($string,$start,$end)
    {
        $s=new Stringizer($string);

        return $s->between($start, $end);
    }

    public static function camelize($string)
    {
        $s=new Stringizer($string);

        return $s->camelize();
    }

    public static function decamelize($string)
    {
        $s=new Stringizer($string);

        return $s->camelToSnake();
    }

    public static function left($string,$start)
    {
        $s=new Stringizer($string);

        return $s->chopLeft($start);
    }

    public static function right($string,$end)
    {
        $s=new Stringizer($string);

        return $s->chopRight($end);
    }

    public static function collapse($string)
    {
        $s=new Stringizer($string);

        return $s->concat("collapseWhitespace");
    }

    public static function start($string,$start)
    {
        $s=new Stringizer($string);

        return $s->concat($start,true);
    }

    public static function end($string,$end)
    {
        $s=new Stringizer($string);

        return $s->concat($end);
    }

    public static function contains($string,$search)
    {
        $s=new Stringizer($string);

        return $s->contains($search);
    }

    public static function _contains($string,$search)
    {
        $s=new Stringizer($string);

        return $s->containsIncaseSensitive($search);
    }

    public static function contains_count($string,$search)
    {
        $s=new Stringizer($string);

        return $s->containsCount($search);
    }

    public static function _contains_count($string,$search)
    {
        $s=new Stringizer($string);

        return $s->containsCountIncaseSensitive($search);
    }

    public static function contains_count_equals($string,$search,$number)
    {
        $s=new Stringizer($string);

        return $s->assertEquals($number, $s->containsCount($search)); // 4;
    }

    public static function dasherize($string)
    {
        $s=new Stringizer($string);

        return $s->dasherize();
    }

    public static function delete($string,$search)
    {
        $s=new Stringizer($string);

        return $s->delete($search);
    }

    public static function ends($string,$end)
    {
        $s=new Stringizer($string);

        return $s->endsWith($end);
    }

    public static function prefix($string,$left)
    {
        $s=new Stringizer($string);

        return $s->ensureLeft($left);
    }

    public static function suffix($string,$right)
    {
        $s=new Stringizer($string);

        return $s->ensureRight($right);
    }

    public static function first($string,$number)
    {
        $s=new Stringizer($string);

        return $s->first($number);
    }

    public static function hash($string)
    {
        $s=new Stringizer($string);

        return $s->hashCode();
    }

    public static function haslow($string)
    {
        $s=new Stringizer($string);

        return $s->hasLowercase();
    }

    public static function hasup($string)
    {
        $s=new Stringizer($string);

        return $s->hasUppercase();
    }

    public static function indexof($string,$search,$index=0)
    {
        $s=new Stringizer($string);

        return $s->indexOf($search,$index);
    }

    public static function _indexof($string,$search)
    {
        $s=new Stringizer($string);

        return $s->indexOfCaseInsensitive($search);
    }

    public static function join($string='',$array,$seprator='')
    {
        $s=new Stringizer($string);

        return $s->join($array,$seprator);
    }

    public static function last($string,$number)
    {
        $s=new Stringizer($string);

        return $s->last($number);
    }

    public static function last_indexof($string,$search)
    {
        $s=new Stringizer($string);

        return $s->lastIndexOf($search);
    }

    public static function _last_indexof($string,$search)
    {
        $s=new Stringizer($string);

        return $s->lastIndexOfCaseInsensitive($search);
    }

    public static function lenght($string)
    {
        $s=new Stringizer($string);

        return $s->lenght();
    }

    public static function low($string)
    {
        $s=new Stringizer($string);

        return $s->lowercase();
    }

    public static function _low($string)
    {
        $s=new Stringizer($string);

        return $s->lowercaseFirst();
    }

    public static function repeat($string,$number)
    {
        $s=new Stringizer($string);

        return $s->repeat($number);
    }

    public static function replace_accents($string)
    {
        $s=new Stringizer($string);

        return $s->replaceAccents();
    }

    public static function remove_ascii($string)
    {
        $s=new Stringizer($string);

        return $s->removeNonAscii();
    }

    public static function remove_space($string)
    {
        $s=new Stringizer($string);

        return $s->removeWhitespace();
    }

    public static function replace($string,$search,$result)
    {
        $s=new Stringizer($string);

        return $s->replace($search,$result);
    }

    public static function _replace($string,$search,$result)
    {
        $s=new Stringizer($string);

        return $s->replaceIncaseSensitive($search,$result);
    }

    public static function reverse($string)
    {
        $s=new Stringizer($string);

        return $s->reverse();
    }

    public static function sentence_count($string)
    {
        $s=new Stringizer($string);

        return $s->sentenceCount();
    }

    public static function split($string,$seprator)
    {
        $s=new Stringizer($string);

        return $s->split($seprator);
    }

    public static function starts($string,$start)
    {
        $s=new Stringizer($string);

        return $s->startsWith($start);
    }

    public static function strip($string)
    {
        $s=new Stringizer($string);

        return $s->stripPunctuation();
    }

    public static function _strip($string)
    {
        $s=new Stringizer($string);

        return $s->stripTags();
    }

    public static function sub($string,$start,$length)
    {
        $s=new Stringizer($string);

        return $s->subString($start,$length);
    }

    public static function swap($string)
    {
        $s=new Stringizer($string);

        return $s->swapCase();
    }

    public static function bool($string)
    {
        return (new Stringizer($string))->toBoolean();
    }

    public static function trim($string)
    {
        $s=new Stringizer($string);

        return $s->trim();
    }

    public static function _trim($string)
    {
        $s=new Stringizer($string);

        return $s->trimLeft();
    }

    public static function trim_($string)
    {
        $s=new Stringizer($string);

        return $s->trimRight();
    }

    public static function truncate($string,$number)
    {
        $s=new Stringizer($string);

        return $s->truncate($number);
    }

    public static function truncate_match($string,$search)
    {
        $s=new Stringizer($string);

        return $s->truncateMatch($search);
    }

    public static function _truncate_match($string,$search)
    {
        $s=new Stringizer($string);

        return $s->truncateMatchCaseInsensitive($search);
    }

    public static function uppercase($string)
    {
        $s=new Stringizer($string);

        return $s->uppercase();
    }

    public static function uppercase_words($string)
    {
        $s=new Stringizer($string);

        return $s->uppercaseWords();
    }

    public static function width($string)
    {
        $s=new Stringizer($string);

        return $s->width();
    }

    public static function word_count($string)
    {
        $s=new Stringizer($string);

        return $s->wordCount();
    }

}

?>