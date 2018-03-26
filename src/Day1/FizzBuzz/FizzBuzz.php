<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 26.03.2018
 * Time: 18:28
 */

namespace Day1\FizzBuzz;


class FizzBuzz
{
    public function get($number){
        switch ($number){
            case ($number % 3 == 0 && $number % 5 == 0):
                return "fizzbuzz";
                break;
            case ($number % 3 == 0):
                return "fizz";
                break;
            case ($number % 5 == 0):
                return "buzz";
                break;
            default:
                return $number;
                break;
        }
    }
}