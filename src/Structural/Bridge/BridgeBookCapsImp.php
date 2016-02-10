<?php

namespace GOF\Structural\Bridge;

class BridgeBookCapsImp extends BridgeBookImp
{

    public function showAuthor($author)
    {
        return strtoupper($author);
    }

    public function showTitle($title)
    {
        return strtoupper($title);
    }
}
