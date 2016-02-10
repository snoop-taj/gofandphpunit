<?php

namespace GOF\Structural\Bridge;

class BridgeBookStarsImp extends BridgeBookImp
{

    public function showAuthor($author)
    {
        return str_replace(" ", "*", $author);
    }

    public function showTitle($title)
    {
        return str_replace(" ", "*", $title);
    }
}
