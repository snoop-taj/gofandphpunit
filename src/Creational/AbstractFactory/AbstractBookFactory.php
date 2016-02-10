<?php

namespace GOF\Creational\AbstractFactory;

abstract class AbstractBookFactory
{

    abstract public function makePHPBook();
    abstract public function makeMySQLBOOK();
}
