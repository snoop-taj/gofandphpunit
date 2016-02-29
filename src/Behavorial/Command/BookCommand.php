<?php

namespace GOF\Behavorial\Command;

abstract class BookCommand
{

    protected $bookCommand;

    public function __construct($bookCommand)
    {
        $this->bookCommand = $bookCommand;
    }

    abstract public function execute();
}
