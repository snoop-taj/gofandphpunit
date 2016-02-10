<?php

namespace GOF\Creational\Prototype;

class PHPBookPrototype extends AbstractBookPrototype
{

    public function __construct()
    {
        $this->topic = 'PHP';
    }

    public function __clone()
    {
        
    }
}
