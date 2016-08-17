<?php

namespace Tests\AppBundle\Controller;

use AppBundle\Controller\UserController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UnitUserControllerTest extends WebTestCase
{
    public function testIsValidUser()
    {
        $user = new UserController();

        $this->assertTrue($user->isValidUser(123));
        $this->assertFalse($user->isValidUser(132));
    }




}
