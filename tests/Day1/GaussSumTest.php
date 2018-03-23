<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 13:35
 */

namespace Test\Day1;

use Day1\GaussTask\GaussSum;
use PHPUnit\Framework\TestCase;

class GaussSumTest extends TestCase
{
    private $sum = 0;
    public function setUp(){
        $this->sum = new GaussSum();
    }
    public function test_gauss_0(){
        $this->assertEquals(0, $this->sum->get(0));
    }
    public function test_gauss_1(){
        $this->assertEquals(1, $this->sum->get(1));
    }
    public function test_gauss_2(){
        $this->assertEquals(3, $this->sum->get(2));
    }
    public function test_gauss_100(){
        $this->assertEquals(5050, $this->sum->get(100));
    }
    public function test_gauss_minus_100(){
        $this->assertEquals(4950, $this->sum->get(-100));
    }
}