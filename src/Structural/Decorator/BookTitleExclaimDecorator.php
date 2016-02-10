<?php

namespace GOF\Structural\Decorator;

class BookTitleExclaimDecorator extends BookTitleDecorator
{

    private $btd;

    public function __construct(BookTitleDecorator $btd)
    {
        $this->btd = $btd;
    }

    public function exclaimTitle()
    {
        $this->btd->title = "!" . $this->btd->title . "!";
    }
}
