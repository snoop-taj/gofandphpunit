<?php

namespace GOF\Test\Creational\Prototype;

use GOF\Creational\Prototype\MySQLBookPrototype;

class MySQLBookPrototypeTest extends \PHPUnit_Framework_TestCase
{

	public function testMySQLBookPrototypeCloneInstances()
	{	
		$mySQLBookPrototypeInstance = new MySQLBookPrototype();
		
		$book1 = clone $mySQLBookPrototypeInstance;
		$book1->setTitle('Mysql is DOPE');
		$book2 = clone $mySQLBookPrototypeInstance;
		$book2->setTitle('Mysql is Sick');

		$this->assertEquals('Mysql is DOPE', $book1->getTitle());
		$this->assertEquals('Mysql is Sick', $book2->getTitle());
	}

}
