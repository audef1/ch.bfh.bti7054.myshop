<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class OrderControllerTest extends WebTestCase
{
    public function testOrder()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Order');
    }

    public function testOrdernew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/OrderNew');
    }

    public function testOrderedit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/OrderEdit');
    }

    public function testOrderdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/OrderDelete');
    }

}
