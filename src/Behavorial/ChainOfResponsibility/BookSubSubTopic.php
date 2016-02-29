<?php

namespace GOF\Behavorial\ChainOfResponsibility;

class BookSubSubTopic extends AbstractBookTopic
{

    private $title;
    private $topic;
    private $parentTopic;

    public function __construct($topic, BookSubTopic $parentTopic)
    {
        $this->topic = $topic;
        $this->title = null;
        $this->parentTopic = $parentTopic;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        if ($this->title !=null) {
            return $this->title;
        } else {
            return $this->parentTopic->getTitle();
        }
    }

    public function getTopic()
    {
        return $this->topic;
    }

    public function getParentTopic()
    {
        return $this->parentTopic;
    }
}
