<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 22.03.2018
 * Time: 22:21
 */

namespace Tests\Day1;

use Day1\ReverseTask\StringReverser;
use PHPUnit\Framework\TestCase;

class StringReverserTest extends TestCase
{
    private $reverse;
    public function setUp(){
        $this->reverse = new StringReverser();
    }
    public function test_reverse_qwerty(){
        $this->assertEquals('ytrewq', $this->reverse->solution('qwerty'));
    }
    public function test_reverse_qwerty_cyryllic(){
        $this->assertEquals('некуцй', $this->reverse->solution('йцукен'));
    }
    public function test_reverse_int_to_string(){
        $this->assertEquals('12345', $this->reverse->solution(54321));
    }

}