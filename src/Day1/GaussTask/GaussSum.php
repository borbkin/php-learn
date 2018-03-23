<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 13:35
 */

namespace Day1\GaussTask;


class GaussSum
{
    public function get($lastRowElement){
        $GaussSum = ($lastRowElement / 2) * (1 + $lastRowElement);
        return $GaussSum;
    }
}
