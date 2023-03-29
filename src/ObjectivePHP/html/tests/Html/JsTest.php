<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Html;

use Fei\ApiServer\ObjectivePHP\Html\Js;

class JsTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Js::clear();
    }

    public function testEmbeddingFile()
    {
        Js::embed('/js/functions.js');
        Js::embed('/js/other.js', ['attr' => 'value']);

        $this->assertEquals(['/js/functions.js' => [], '/js/other.js' => ['attr' => 'value']], Js::get());

        Js::embed('/js/functions.js', ['attr' => 'value']);
        $this->assertEquals(['/js/functions.js' => ['attr' => 'value'], '/js/other.js' => ['attr' => 'value']], Js::get());

        Js::append('/js/functions.js');
        $this->assertEquals(['/js/other.js' => ['attr' => 'value'], '/js/functions.js' => []], Js::get());

        Js::prepend('/js/prioritary.js', ['attr' => 'value']);
        $this->assertEquals(['/js/prioritary.js' => ['attr' => 'value'], '/js/other.js' => ['attr' => 'value'], '/js/functions.js' => []], Js::get());
    }
}