<?php

namespace GOF\Creational\Prototype;

class MySQLBookPrototype extends AbstractBookPrototype
{

    public function __construct()
    {
        $this->topic = 'MySQL';
    }

    public function __clone()
    {
        
    }
}
