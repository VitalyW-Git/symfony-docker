<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CalculatorControllerTest extends WebTestCase
{
    public function testShowPost()
    {
        $client = static::createClient();

        $client->request('GET', '/calculator/sum/3/4');

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertJsonStringEqualsJsonString(json_encode(['result' => 7]), $client->getResponse()->getContent());
    }
}
