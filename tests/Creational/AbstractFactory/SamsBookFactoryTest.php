<?php

namespace GOF\Test\Creational\AbstractFactory;

use GOF\Creational\AbstractFactory\SamsBookFactory;

class SamsBookFactoryTest extends \PHPUnit_Framework_TestCase
{

    private $bookFactoryInstance = null;

    public function setUp()
    {
        $this->bookFactoryInstance = new SamsBookFactory();
    }

    public function testPHPBookInstance()
    {
        $title = $this->phpBookFactory($this->bookFactoryInstance);
        $this->assertEquals('Sams', $title);
    }

    public function testMySQLBookInstance()
    {
        $title = $this->mysqlBookFactory($this->bookFactoryInstance);
        $this->assertEquals('Sams', $title);
    }

    private function mysqlBookFactory($instance)
    {
        return $instance->makeMySQLBook()->getAuthor();
    }
    
    private function phpBookFactory($instance)
    {
        return $instance->makePHPBook()->getAuthor();
    }
}
