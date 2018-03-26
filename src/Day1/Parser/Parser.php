<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 26.03.2018
 * Time: 23:04
 */

namespace Day1\Parser;


class Parser
{
    public $string;
    public function __construct($string){
        $this->string = $string;
    }
    public function getPhones(){
        $phones = [];
        preg_match_all('^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$^', $this->string,$phones);
        foreach ($phones as $k => $phone)
            echo $phone[$k];
    }

    public function getLinks(){}
}

$p = new Parser('Follow me in <a href="http://twitter.com">Twitter</a> and <a href="http://instagram.com">Instagram</a> and this is my phone numbers: +8(999)999-99-99 and +7(111)111-11-11.');
echo $p->getPhones();
