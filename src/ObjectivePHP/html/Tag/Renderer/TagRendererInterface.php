<?php

namespace Fei\ApiServer\ObjectivePHP\Html\Tag\Renderer;

use Fei\ApiServer\ObjectivePHP\Html\Tag\Tag;

interface TagRendererInterface
{
    public function render(Tag $tag);
}