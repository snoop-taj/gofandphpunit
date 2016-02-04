<?php

namespace GOF\Creational\AbstractFactory;

abstract class AbstractBook
{
    abstract public function getAuthor();
    abstract public function getTitle();
}
