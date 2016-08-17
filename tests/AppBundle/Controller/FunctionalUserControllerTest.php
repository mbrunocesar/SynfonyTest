<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FunctionalUserControllerTest extends WebTestCase
{
    public function testUserGet()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/user/1');

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());

        $this->assertTrue(
            $response->headers->contains(
                'Content-Type', 'application/json'
            )
        );

        $content = $response->getContent();

        $json = json_decode($content);

    }




}
