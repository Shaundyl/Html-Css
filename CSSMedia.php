<?php
declare(strict_types=1);
namespace Generator; 
use Exception; 
class CSSMedia{
    protected string $highTemplate = "@media ";  
    protected array $subFormats = array(); 
    public function __construct(int $px, string $limit, bool $screen)
    {
        if($screen)
        $this->highTemplate .= "screen and "; 
        
        switch($limit){
            case 'MAX_WIDTH':
                $this->highTemplate .= "(max-width: ";
                break;
            case 'max_width':
                $this->highTemplate .= "(max-width: ";
                break;
            case 'MAX_HEIGHT':
                $this->highTemplate .= "(max-height: ";
                break;
            case 'max_height':
                $this->highTemplate .= "(max-height: ";
                break;
            case 'MIN_WIDTH':
                $this->highTemplate .= "(min-width: ";
                break;
            case 'min_width':
                $this->highTemplate .= "(min-width: ";
                break;
            case 'MIN_HEIGHT':
                $this->highTemplate .= "(min-height: ";
                break;
            case 'min_height':
                $this->highTemplate .= "(min-height: ";
                break; 
            
            default:
            throw new Exception("Not a valid limit input!"); 
        }

        $this->highTemplate .= $px . "px) { \n"; 
    }

    public function addFormat(CSSFormat $format) : CSSMedia{
        array_push($this->subFormats, $format);
        return $this; 
    }

    public function finish(){
        return "\n }"; 
    }

    public function getTemplate(){
        return $this->highTemplate; 
    }
    public function getFormats(){
        return $this->subFormats; 
    }
}



?>