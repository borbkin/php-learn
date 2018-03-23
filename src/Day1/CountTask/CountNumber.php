<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 14:48
 */

namespace Day1\CountTask;


class CountNumber
{
    /**
     * @param $digit
     * @param $number
     * @return int
     */
    public function count($digit, $number){
        return substr_count($number,$digit,0);
    }
}
