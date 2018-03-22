<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 22.03.2018
 * Time: 23:05
 */

namespace Day1\ReverseTask;


class StringReverser
{
    public function solution($inputString){
        $reverted_str = "";
        for ($i = mb_strlen($inputString, "UTF-8"); $i>=0; $i--){
            $reverted_str .= mb_substr($inputString,$i,1,"UTF-8");
        }
        return $reverted_str;
    }
}
