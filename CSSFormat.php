<?php
namespace Generator; 
use Exception; 
 class CSSFormat{
    protected string $container; 
    protected string $template; 

    public function __construct(string $selector)
    {
        $this->container = $selector; 
        $this->template = $this->container . "{ "; 
    }


    public function set(string $element, string $val) : CSSFormat{
          $this->template .= "\n" . $element . ": " . $val . ";"; 
          return $this; 
    }

    public function finishTemplate(){
        $this->template .=  "\n" . "}"; 
    }

    public function getTemplate() : string{
        if (strpos($this->template, "}") === false) 
            throw new Exception("CSSFormat template is not finished. Call finishTemplate first.");

        return $this->template; 
    }

    


}



?>