<?php


namespace GOF\Behavorial\ChainOfResponsibility;

class BookTopic extends AbstractBookTopic
{

    private $title;
    private $topic;
    
    public function __construct($topic)
    {
        $this->topic = $topic;
        $this->title = null;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        if ($this->title != null) {
            return $this->title;
        } else {
            return 'There is no title available';
        }
    }

    public function getTopic()
    {
        return $this->topic;
    }
}
