<?php


namespace GOF\Behavorial\ChainOfResponsibility;

abstract class AbstractBookTopic
{

    abstract public function getTopic();
    abstract public function getTitle();
    abstract public function setTitle($title);
}
