<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PagesControllerTest extends WebTestCase
{
    public function testPage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Page');
    }

    public function testPagenew()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PageNew');
    }

    public function testPageedit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PageEdit');
    }

    public function testPagedelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/PageDelete');
    }

}
