<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 14:48
 */

namespace Test\Day1;

use Day1\CountTask\CountNumber;
use PHPUnit\Framework\TestCase;


class CountNumberTest extends TestCase
{
    private $counter;
    public function setUp(){
        $this->counter = new CountNumber();
    }
    public function test_count_5(){
        $this->assertEquals(1, $this->counter->count(5, 4325));
    }
    public function test_count_10(){
        $this->assertEquals(4, $this->counter->count(10, 10101010));
    }
    public function test_count_digit_not_in_number(){
        $this->assertEquals(0, $this->counter->count(5, 1234));
    }

}