<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategoryControllerTest extends WebTestCase
{
    public function testCategory()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Category');
    }

    public function testCategorynew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CategoryNew');
    }

    public function testCategoryeditnew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CategoryEditNew');
    }

    public function testCategorydelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/CategoryDelete');
    }

}
