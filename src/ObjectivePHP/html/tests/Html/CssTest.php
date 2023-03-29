<?php

namespace Tests\Fei\ApiServer\ObjectivePHP\Html;

use Fei\ApiServer\ObjectivePHP\Html\Css;

class CssTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        Css::clear();
    }

    public function testEmbeddingFile()
    {
        Css::embed('/css/styles.css');
        Css::embed('/css/other.css', ['attr' => 'value']);

        $this->assertEquals(['/css/styles.css' => [], '/css/other.css' => ['attr' => 'value']], Css::get());

        Css::embed('/css/styles.css', ['attr' => 'value']);
        $this->assertEquals(['/css/styles.css' => ['attr' => 'value'], '/css/other.css' => ['attr' => 'value']], Css::get());

        Css::append('/css/styles.css');
        $this->assertEquals(['/css/other.css' => ['attr' => 'value'], '/css/styles.css' => []], Css::get());

        Css::prepend('/css/prioritary.css', ['attr' => 'value']);
        $this->assertEquals(['/css/prioritary.css' => ['attr' => 'value'], '/css/other.css' => ['attr' => 'value'], '/css/styles.css' => []], Css::get());
    }
}