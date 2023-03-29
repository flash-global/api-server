<?php

namespace Fei\ApiServer\ObjectivePHP\Html\Tag\Input;

use Fei\ApiServer\ObjectivePHP\Html\Exception;
use Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\DefaultTagRenderer;
use Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer\TagRendererInterface;
use Fei\ApiServer\ObjectivePHP\Html\Tag\Tag;

class InputTagRenderer implements TagRendererInterface
{
    public function render(Tag $tag)
    {
        if (!$tag instanceof Input) {
            throw new Exception(__CLASS__ . ' only renders Tag objects that instances of ' . Input::class);
        }

        $tag->assignDefaultValue();

        $tagRenderer = new DefaultTagRenderer();

        return $tagRenderer->render($tag);
    }
}