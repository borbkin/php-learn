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
        $clearArr = array_unique($arr);
        for ($i = count($clearArr) - 1; $i >= 0 ; $i--){
            echo $maxElement = max($clearArr);
            if ($clearArr[$i] < $maxElement){
                echo $clearArr[$i];
                break;
            }
        }
    }
}


$array = [3, 4, 2, 4, 5, 5];
$test = new GetSecondMax();
echo $test->getSecond(3, 4, 2, 4, 5, 5);