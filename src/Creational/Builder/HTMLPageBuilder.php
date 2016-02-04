<?php

namespace GOF\Creational\Builder;

use GOF\Creational\Builder\HTMLPage;

class HTMLPageBuilder extends AbstractPageBuilder
{

private $page=null;

public function __construct()
{

	$this->page = new HTMLPage();

}

public function setTitle($title)
{

	$this->page->setTitle($title);

}

public function setHeading($head)
{

	$this->page->setHeading($head);

}

public function setContent($content)
{

	$this->page->setContent($content);

}

public function formPage()
{
	$this->page->formPage();

}

public function getPage()
{
	return $this->page;
}

}
