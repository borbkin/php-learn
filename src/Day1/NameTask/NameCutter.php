<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 18:43
 */

namespace Day1\NameTask;


class NameCutter
{
    public function cut($full_name){
        return preg_replace_callback('/^\s*(\S+)\s+(\S)\S*(?:\s+(\S)\S*)?\s*$/u', function ($words){
            return $words[1].' '.join('.', array_slice($words, 2)).'.';
        }, $full_name);
    }
}
