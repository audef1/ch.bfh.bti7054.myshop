<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CustomerControllerTest extends WebTestCase
{
    public function testCustomer()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Customer');
    }

    public function testCustomeredit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CustomerEdit');
    }

    public function testCustomerdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CustomerDelete');
    }

    public function testCustomernew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CustomerNew');
    }

}
