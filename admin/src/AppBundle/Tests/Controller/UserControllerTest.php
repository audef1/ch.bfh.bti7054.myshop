<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testUser()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/User');
    }

    public function testUsernew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UserNew');
    }

    public function testUseredit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UserEdit');
    }

    public function testUserdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/UserDelete');
    }

}
