<?php

namespace GOF\Structural\Decorator;

class BookTitleStarsDecorator extends BookTitleDecorator
{
    private $btd;

    public function __construct(BookTitleDecorator $btd)
    {
        $this->btd = $btd;
    }

    public function starTitle()
    {
        $this->btd->title = str_replace(" ", "*", $this->btd->title);
    }
}
