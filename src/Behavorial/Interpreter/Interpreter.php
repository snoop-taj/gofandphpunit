<?php


namespace GOF\Behavorial\Interpreter;

class Interpreter
{

    private $bookList;

    public function __construct($bookList)
    {
        $this->bookList = $bookList;
    }

    public function interpret()
    {
        $arg = func_get_args();
        $output = null;

        if ($arg[0] == 'book') {
            if ($arg[1] == 'author') {
                if (is_numeric($arg[2])) {
                    $book = $this->bookList->getBook($arg[2]);
                    if ($book == null) {
                        $output = 'Can not proccess, there is no book #, '. $arg[2];
                    } else {
                        $output = $book->getAuthor();
                    }
                } elseif ($arg[2] == 'title') {
                    if (is_numeric($arg[3])) {
                        $book = $this->bookList->getBook($arg[3]);
                        if ($book == null) {
                            $output = 'Can not process, there is no book #, '.$arg[3];
                        } else {
                            $output = $book->getTitleAndAuthor();
                        }
                    } else {
                        $output = 'Can not process, book # must be numeric';
                    }
                } else {
                    $output = 'Can not process, book # must be numeric';
                }
                
            }
            if ($arg[1] == 'title') {
                if (is_numeric($arg[2])) {
                    $book = $this->bookList->getBook($arg[2]);
                    if ($book == null) {
                        $output = 'Can not process, there is no book #, '.$arg[2];
                    } else {
                        $output = $book->getTitle();
                    }
                } else {
                    $output = 'Can not process, book # must be numeric';
                }
            }
        } else {
            $output = 'Can not process, '.
                  'Can only process book author #, '.
                  'book author title #, '.
                  'book title #';
        }
        return $output;
    }
}
