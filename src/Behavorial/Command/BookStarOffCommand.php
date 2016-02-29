<?php


namespace GOF\Behavorial\Command;

class BookStarOffCommand extends BookCommand
{

    public function execute()
    {
        $this->bookCommand->setStarOff();
    }
}
