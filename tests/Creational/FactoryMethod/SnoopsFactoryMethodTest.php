<?php

namespace GOF\Test\Creational\FactoryMethod;

use GOF\Creational\FactoryMethod\SnoopsFactoryMethod;

class SnoopsFactoryMethodTest extends \PHPUnit_Framework_TestCase
{

    private $factoryInstance = null;

    public function setUp()
    {
        $this->factoryInstance = new SnoopsFactoryMethod();
    }

    public function testDefaultPHPBookFactoryMethod()
    {
        $phpBookInstance = $this->factoryInstance->makePHPBook();
        $this->assertEquals('Snoop', $phpBookInstance->getAuthor());
    }

    public function testSamsPHPBookFactoryMethod()
    {
        $phpBookInstance = $this->factoryInstance->makePHPBook('sams');
        $this->assertEquals('Sams', $phpBookInstance->getAuthor());
    }

    public function testSnoopsPHPBookFactoryMethod()
    {
        $phpBookInstance = $this->factoryInstance->makePHPBook('us');
        $this->assertEquals('Snoop', $phpBookInstance->getAuthor());
    }
}
