<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 26.03.2018
 * Time: 19:28
 */

namespace Test\Day1;

use Day1\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;


class FizzBuzzTest extends TestCase
{
    private $fb;
    public function setUp(){
        $this->fb = new FizzBuzz();
    }
    public function test_1(){
        $this->assertEquals(1, $this->fb->get(1));
    }
    public function test_16(){
        $this->assertEquals(16, $this->fb->get(16));
    }
    public function test_3(){
        $this->assertEquals("fizz", $this->fb->get(3));
    }
    public function test_5(){
        $this->assertEquals("buzz", $this->fb->get(5));
    }
    public function test_15(){
        $this->assertEquals( "fizzbuzz", $this->fb->get(15));
    }

}