<?php

namespace GOF\Test\Structural\Bridge;

use GOF\Structural\Bridge\BridgeBookAuthorTitle;

class BookBridgeAuthorTitleTest extends \PHPUnit_Framework_TestCase
{

    public function testBookBridgeAuthorTitleWithCaps()
    {
        $bb = new BridgeBookAuthorTitle("PHP for Dummies", "Snoop", '');
        $this->assertEquals("SNOOP's PHP FOR DUMMIES", $bb->showAuthorTitle());
    }

    public function testBookBridgeAuthorTitleWithStars()
    {
        $bb = new BridgeBookAuthorTitle("PHP for Dummies", "Snoop", "STARS");
        $this->assertEquals("Snoop's PHP*for*Dummies", $bb->showAuthorTitle());
    }
}
