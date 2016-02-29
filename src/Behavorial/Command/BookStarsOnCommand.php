<?php


namespace GOF\Behavorial\Command;

class BookStarsOnCommand extends BookCommand
{

    public function execute()
    {
        $this->bookCommand->setStarOn();
    }
}
