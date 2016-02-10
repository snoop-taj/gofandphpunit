<?php

namespace GOF\Structural\Bridge;

abstract class BridgeBook
{

    private $title;
    private $author;
    private $bbImp;

    public function __construct($title, $author, $choice)
    {
        $this->title = $title;
        $this->author = $author;
        
        switch ($choice) {
            case 'STARS':
                $this->bbImp = new BridgeBookStarsImp();
                break;
            default:
                $this->bbImp = new BridgeBookCapsImp();
        }
    }

    public function showAuthor()
    {
        return $this->bbImp->showAuthor($this->author);
    }

    public function showTitle()
    {
        return $this->bbImp->showTitle($this->title);
    }
}
