<?php

namespace HexletPHPLinter;

class UserTest extends \PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $name = 'john';
        $user = new User($name);

        $this->assertEquals($name, $user->getName());
    }
}
