<?php
/**
 * Created by PhpStorm.
 * User: betereshchenko
 * Date: 23.03.2018
 * Time: 18:43
 */

namespace Test\Day1;

use Day1\NameTask\NameCutter;
use PHPUnit\Framework\TestCase;


class NameCutterTest extends TestCase
{
    private $name;
    public function setUp()/* The :void return type declaration that should be here would cause a BC issue */
    {
      $this->name = new NameCutter();
    }
    public function test_myself_eng(){
        $this->assertEquals('Tereshchenko B.E.', $this->name->cut('Tereshchenko Boris Evgenievich'));
    }
    public function test_iasomov_ru(){
        $this->assertEquals('Сомов И.А.', $this->name->cut('Сомов Игорь Андреевич'));
    }
    public function test_name_no_patronymic(){
        $this->assertEquals('Smith J.', $this->name->cut('Smith John'));
    }


}