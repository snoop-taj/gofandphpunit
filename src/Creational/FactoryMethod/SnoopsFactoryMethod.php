<?php

namespace GOF\Creational\FactoryMethod;

use GOF\Creational\AbstractFactory\SamsPHPBook;
use GOF\Creational\FactoryMethod\SnoopsPHPBook;

class SnoopsFactoryMethod extends AbstractBookFactory
{

    private $context = 'Snoop';

    public function makePHPBook($param = '')
    {
        $book = null;

        switch ($param) {
            case 'us':
                $book = new SnoopsPHPBook();
                break;

            case 'sams':
                $book = new SamsPHPBook();
                break;

            default:
                $book = new SnoopsPHPBook();
                break;
        }
    
        return $book;
    }
}
