<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testProduct()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Product');
    }

    public function testProductnew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductNew');
    }

    public function testProductedit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductEdit');
    }

    public function testProductdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductDelete');
    }

}
