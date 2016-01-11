<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BrandControllerTest extends WebTestCase
{
    public function testBrand()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Brand');
    }

    public function testBrandnew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/BrandNew');
    }

    public function testBrandedit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/BrandEdit');
    }

    public function testBranddelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/BrandDelete');
    }

}
