<?php

namespace Package\HelloWord\Tests\Unit;

use Package\HelloWord\HelloWord;
use PHPUnit\Framework\TestCase;
class HelloWordTest extends TestCase
{

    public function testHelloWord()
    {
        $helloWord = new HelloWord();
        $this->assertTrue($helloWord->sayHello() === 'Hello World!');
    }

}