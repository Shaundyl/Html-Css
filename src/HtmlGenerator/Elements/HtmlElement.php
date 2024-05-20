<?php

namespace HtmlGenerator\Elements;

use HtmlGenerator\Interfaces\HtmlElementInterface;

class HtmlElement implements HtmlElementInterface
{
    protected $tag;
    protected $attributes = [];
    protected $content = '';
    protected $children = [];

    public function __construct($tag)
    {
        $this->tag = $tag;
    }

    public function setAttribute($name, $value)
    {
        $this->attributes[$name] = $value;
        return $this;
    }

    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    public function addChild(HtmlElementInterface $child)
    {
        $this->children[] = $child;
        return $this;
    }

    public function render()
    {
        $html = "<{$this->tag}";
        foreach ($this->attributes as $name => $value) {
            $html .= " $name=\"$value\"";
        }

        $isVoidElement = in_array($this->tag, [
            'area', 'base', 'br', 'col', 'embed', 'hr', 'img', 'input', 'link', 
            'meta', 'param', 'source', 'track', 'wbr'
        ]);

        if ($isVoidElement) {
            $html .= " />\n";
        } else {
            $html .= ">\n{$this->content}\n";
            foreach ($this->children as $child) {
                $html .= $child->render();
            }
            $html .= "</{$this->tag}>\n";
        }

        return $html;
    }
}
