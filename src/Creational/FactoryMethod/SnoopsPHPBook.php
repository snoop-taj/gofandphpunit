<?php

namespace GOF\Creational\FactoryMethod;

use GOF\Creational\AbstractFactory\AbstractBook;

class SnoopsPHPBook extends AbstractBook
{

private $title = null;
private $author = null;

public function __construct()
{

	$this->title = 'PHP In Its Early Stages';
	$this->author = 'Snoop';
	
}

public function getAuthor()
{
	return $this->author;
}

public function getTitle()
{

	return $this->title;
}

}

