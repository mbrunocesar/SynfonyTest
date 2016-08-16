<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testUserDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('DELETE', '/user/2');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        //$this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());
    }
}
