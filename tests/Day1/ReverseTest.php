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
    private $reverter;
    public function setUp(){
        $this->reverter = new StringReverser();
    }
    public function test_reverse_qwerty(){
        $this->assertEquals('ytrewq', $this->reverter->solution('qwerty'));
    }
    public function test_reverse_qwerty_cyryllic(){
        $this->assertEquals('некуцй', $this->reverter->solution('йцукен'));
    }
    public function test_reverse_int_to_string(){
        $this->assertEquals('12345', $this->reverter->solution(54321));
    }

}