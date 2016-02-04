<?php 


namespace GOF\Creational\Builder;

use GOF\Creational\Builder\AbstractPageBuilder;

class HTMLPageDirector extends AbstractPageDirector
{

private $builder = null;
public function __construct(AbstractPageBuilder $builder)
{

$this->builder = $builder;

}

public function buildPage()
{

	$this->builder->setTitle('Testing Title');
	$this->builder->setHeading('Testing Heading');
	$this->builder->setContent('Testing Content 1');
	$this->builder->setContent('Testing Content 2');
	$this->builder->formPage();

}

public function getPage()
{
	return $this->builder->getPage();
}

}
