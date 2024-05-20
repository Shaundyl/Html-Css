<?php

namespace HtmlGenerator\Interfaces;

use HtmlGenerator\Interfaces\HtmlElementInterface;

interface HtmlGeneratorInterface
{
    public static function create($tag): HtmlElementInterface;
}
