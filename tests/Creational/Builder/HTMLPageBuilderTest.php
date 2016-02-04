<?php

namespace GOF\Test\Creational\Builder;

use GOF\Creational\Builder\HTMLPageBuilder;
use GOF\Creational\Builder\HTMLPageDirector;

class HTMLPageBuilderTest extends \PHPUnit_Framework_TestCase
{

    public function testPageBuilder()
    {
        $pageBuilder = new HTMLPageBuilder();
        $pageDirector = new HTMLPageDirector($pageBuilder);

        $pageDirector->buildPage();
        $html = $pageDirector->getPage()->showPage();
        file_put_contents(dirname(__DIR__).'/../tmp/html.txt', $html);
        $file_content = file_get_contents(dirname(__DIR__).'/../tmp/html.txt');
        $this->assertEquals($file_content, $pageDirector->getPage()->showPage());
    }
}
