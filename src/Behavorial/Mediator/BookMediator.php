<?php


namespace GOF\Behavorial\Mediator;

class BookMediator
{

    private $title;
    private $author;

    public function __construct($title, $author)
    {
        $this->title = new BookTitleColleague($title, $this);
        $this->author = new BookAuthorColleague($author, $this);
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function change(BookColleague $bookColleague)
    {
        if ($bookColleague instanceof BookTitleColleague) {

            switch ($bookColleague->getState()) {
                case 'upper':
                    if ($this->getAuthor()->getState() != 'upper') {
                        $this->getAuthor()->setAuthorUpperCase();
                    }
                    break;
                case 'lower':
                    if ($this->getAuthor()->getState() != 'lower') {
                        $this->getAuthor()->setAuthorLowerCase();
                    }
                    break;
            }
            
        } elseif ($bookColleague instanceof BookAuthorColleague) {
            switch ($bookColleague->getState()) {
                case 'upper':
                    if ($this->getTitle()->getState() != 'upper') {
                        $this->getTitle()->setTitleUpperCase();
                    }
                    break;
                case 'lower':
                    if ($this->getTitle()->getState() != 'lower') {
                        $this->getTitle()->setTitleLowerCase();
                    }
                    break;
            }
        }
    }
}
