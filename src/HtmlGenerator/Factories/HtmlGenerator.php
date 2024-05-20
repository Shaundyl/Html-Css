<?php

namespace HtmlGenerator\Factories;

use HtmlGenerator\Interfaces\HtmlGeneratorInterface;
use HtmlGenerator\Elements\HtmlElement;
use HtmlGenerator\Interfaces\HtmlElementInterface;

class HtmlGenerator implements HtmlGeneratorInterface
{
    public static function create($tag): HtmlElementInterface
    {
        return new HtmlElement($tag);
    }
}
