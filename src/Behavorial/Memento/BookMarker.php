<?php


namespace GOF\Behavorial\Memento;

class BookMarker
{

    private $title;
    private $page;

    public function __construct(BookReader $bookReader)
    {
        $this->setPage($bookReader);
        $this->setTitle($bookReader);
    }

    public function setTitle(BookReader $bookReader)
    {
        $this->title = $bookReader->getTitle();
    }

    public function getTitle(BookReader $bookReader)
    {
        $bookReader->setTitle($this->title);
    }

    public function setPage(BookReader $bookReader)
    {
        $this->page = $bookReader->getPage();
    }

    public function getPage(BookReader $bookReader)
    {
        $bookReader->setPage($this->page);
    }
}
