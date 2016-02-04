<?php

namespace GOF\Creational\AbstractFactory;

use GOF\Creational\AbstractFactory\SamsPHPBook;
use GOF\Creational\AbstractFactory\SamsMySQLBook;

class SamsBookFactory extends AbstractBookFactory
{

    private $context = 'Sam';

    public function makePHPBook()
    {
        return new SamsPHPBook;
    }

    public function makeMySQLBook()
    {
        return new SamsMySQLBook;
    }
}
