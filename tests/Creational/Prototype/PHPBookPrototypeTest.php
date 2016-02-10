<?php

namespace GOF\Test\Creational\Prototype;

use GOF\Creational\Prototype\PHPBookPrototype;

class PHPBookPrototypeTest extends \PHPUnit_Framework_TestCase
{

    public function testPHPBookPrototypeCloneInstance()
    {
        $phpBookPrototypeInstance = new PHPBookPrototype();
        
        $book1 = clone $phpBookPrototypeInstance;
        $book1->setTitle('PHP is Dope');

        $book2 = clone $phpBookPrototypeInstance;
        $book2->setTitle('PHP for Dummies');

        $this->assertEquals('PHP is Dope', $book1->getTitle());
        $this->assertEquals('PHP for Dummies', $book2->getTitle());
    }
}
