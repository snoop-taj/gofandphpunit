<?php

namespace GOF\Creational\Builder;

abstract class AbstractPageDirector
{

    abstract public function __construct(AbstractPageBuilder $builder);

    abstract public function buildPage();

    abstract public function getPage();
}
