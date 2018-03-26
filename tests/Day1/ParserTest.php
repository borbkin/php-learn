<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 26.03.2018
 * Time: 23:04
 */

namespace Test\Day1;

use Day1\Parser\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    private $p;
    public function setUp(){
        $this->p = new Parser('Follow me in <a href="http://twitter.com">Twitter</a> and <a href="http://instagram.com">Instagram</a> and this is my phone numbers: +8(999)999-99-99 and +7(111)111-11-11.');
    }
    public function test_phone(){
        $this->assertEquals(['+8(999)999-99-99'], $this->p->getPhones());
    }

    public function test_phones(){
        $this->assertEquals(['+8(999)999-99-99', '+8(111)111-11-11'], $this->p->getPhones());
    }
    public function test_link(){
        $this->assertEquals(['http://google.com'], $this->p->getLinks());
    }
    public function test_links(){
        $this->assertEquals(['http://twitter.com','http://instagram.com'], $this->p->getLinks());
    }







}