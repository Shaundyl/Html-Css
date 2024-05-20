<?php

namespace HtmlGenerator\Interfaces;

interface HtmlElementInterface
{
    public function setAttribute($name, $value);
    public function setContent($content);
    public function addChild(HtmlElementInterface $child);
    public function render();
}
