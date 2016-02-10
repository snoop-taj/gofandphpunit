<?php

namespace GOF\Structural\Bridge;

class BridgeBookAuthorTitle extends BridgeBook
{
    public function showAuthorTitle()
    {
        return $this->showAuthor() .'\'s '. $this->showTitle();
    }
}
