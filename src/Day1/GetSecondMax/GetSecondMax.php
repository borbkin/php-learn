<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 27.03.2018
 * Time: 23:25
 */

namespace Day1\GetSecondMax;


class GetSecondMax
{
    public function getSecond(array $arr){
        $arr = array_unique($arr);
        rsort($arr);
        return $arr[1];
    }
}
