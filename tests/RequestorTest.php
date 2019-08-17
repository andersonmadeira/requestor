<?php

use AndersonMadeira\Requestor\Requestor;
use PHPUnit\Framework\TestCase;

/**
 *  Requestor Basic Tests
 *
 * @author yourname
 */
class RequestorTest extends TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $req = new Requestor;
        $this->assertTrue(is_object($req));
        unset($req);
    }

    public function testGreeting()
    {
        $req = new Requestor;
        $this->assertTrue($req->greet('Anderson') == 'Hello Anderson');
        unset($req);
    }
}