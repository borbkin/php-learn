<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 27.03.2018
 * Time: 23:25
 */

namespace Test\Day1;

use Day1\GetSecondMax\GetSecondMax;
use PHPUnit\Framework\TestCase;

class GetSecondMaxTest extends TestCase
{
    private $yardstick;
    public function setUp()
    {
        $this->yardstick = new GetSecondMax();
    }
    public function test_array(){
        $this->assertEquals(4, [3, 4, 2, 4, 5, 5]);
    }



}