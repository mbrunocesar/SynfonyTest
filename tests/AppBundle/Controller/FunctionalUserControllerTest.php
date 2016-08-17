<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class FunctionalUserControllerTest extends WebTestCase
{

    public function testUserGet()
    {
        $this->subTestUserGet();
    }

    // Should have a user with idUser = 1 in DB
    public function subTestUserGet()
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

        $json = $response->getContent();
        $content = json_decode($json);

        return $content;
    }


    public function testUserUpdate()
    {
        $this->subTestUserUpdate(1);
        $user = $this->subTestUserGet();

        $this->assertEquals("Tester 1", $user->name);

        $this->subTestUserUpdate(33);
        $user = $this->subTestUserGet();

        $this->assertEquals("Tester 33", $user->name);

    }


    public function subTestUserUpdate($number)
    {
        $client = static::createClient();

        $crawler = $client->request(
            'PUT',
            '/user/1',
            array('name' => "Tester {$number}")
        );

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(
            $response->headers->contains(
                'Content-Type', 'application/json'
            )
        );

        $json = $response->getContent();
        $content = json_decode($json);

        $this->assertEquals('OK', $content->status);
    }


    public function testUserInsertAndDelete()
    {
        $id = $this->subTestUserInsert();
        $this->subTestUserDelete($id);
    }


    public function subTestUserInsert()
    {
        $client = static::createClient();

        $crawler = $client->request(
            'POST',
            '/user/',
            array('name' => 'Tester', 'phone' => '11-92233-4455', 'email' => 'tester@testing.com')
        );

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(
            $response->headers->contains(
                'Content-Type', 'application/json'
            )
        );

        $json = $response->getContent();
        $content = json_decode($json);

        $this->assertEquals('OK', $content->status);

        return $content->id;
    }


    public function subTestUserDelete($id)
    {
        $client = static::createClient();

        $crawler = $client->request(
            'DELETE',
            '/user/'.$id
        );

        $response = $client->getResponse();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertTrue(
            $response->headers->contains(
                'Content-Type', 'application/json'
            )
        );

        $json = $response->getContent();
        $content = json_decode($json);

        $this->assertEquals('OK', $content->status);
    }


}
