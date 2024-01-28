<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class PageControllerTest extends WebTestCase
{
    public function testHelloPage()
    {
        $client = static::createClient();
        $client->request('GET', '/hello');
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
