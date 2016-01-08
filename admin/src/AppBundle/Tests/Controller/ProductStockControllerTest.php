<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductStockControllerTest extends WebTestCase
{
    public function testProdutstock()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProdutStock');
    }

    public function testProductstocknew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductStockNew');
    }

    public function testProductstockedit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductStockEdit');
    }

    public function testProductstockdelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ProductStockDelete');
    }

}
