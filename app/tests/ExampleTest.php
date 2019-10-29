<?php

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testExample()
    {
        $this->get('/');

        $this->assertEquals(
            "Hello from controller!",
            $this->response->getContent()
        );
    }
}
