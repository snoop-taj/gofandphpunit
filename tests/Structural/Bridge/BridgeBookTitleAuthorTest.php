<?php

namespace GOF\Test\Structural\Bridge;

use GOF\Structural\Bridge\BridgeBookTitleAuthor;

class BridgeBookTitleAuthorTest extends \PHPUnit_Framework_TestCase
{
    public function testBridgeBookShowsTitleAuthorWithCapsChoice()
    {
        $bb = new BridgeBookTitleAuthor("PHP for Dummies", "snoop", '');
        $this->assertEquals("PHP FOR DUMMIES by SNOOP", $bb->showTitleAuthor());
    }

    public function testBridgeBookShowTitleAuthorWithStarsChoice()
    {
        $bb = new BridgeBookTitleAuthor("PHP for Dummies", "Snoop", "STARS");
        $this->assertEquals("PHP*for*Dummies by Snoop", $bb->showTitleAuthor());
    }
}
