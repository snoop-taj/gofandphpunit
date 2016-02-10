<?php

namespace GOF\Structural\Bridge;

class BridgeBookTitleAuthor extends BridgeBook
{
    public function showTitleAuthor()
    {
        return $this->showTitle() . ' by ' . $this->showAuthor();
    }
}
