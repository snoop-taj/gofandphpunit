<?php

namespace GOF\Creational\Prototype;

abstract class AbstractBookPrototype
{
	protected $topic;
	protected $title;

	public function getTopic()
	{
		return $this->topic;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	public function getTitle()
	{
		return $this->title;
	}

	abstract function __clone();

}
