<?php 


namespace GOF\Creational\Builder;

class HTMLPage
{

private $page = null;
private $title = null;
private $heading = null;
private $content = null;

public function setTitle($title)
{

	$this->title = $title;

}

public function setHeading($heading)
{

	$this->heading = $heading;

}

public function showPage()
{

	return $this->page;

}

public function setContent($content)
{

	$this->content .= $content;

}

public function formPage()
{

	$this->page = '[html]';
	$this->page .= '[head][title]'.$this->title.'[/title][/head]';
	$this->page .= '[body]';
	$this->page .= '[h 1]'.$this->heading.'[/h 1]';
	$this->page .= $this->content;
	$this->page .= '[/body]';
	$this->page .= '[/html]';
}

}
