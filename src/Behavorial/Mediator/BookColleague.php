<?php


namespace GOF\Behavorial\Mediator;

abstract class BookColleague
{

    private $mediator;

    public function __construct($mediator)
    {
        $this->mediator = $mediator;
    }

    public function getMediator()
    {
        return $this->mediator;
    }
}
