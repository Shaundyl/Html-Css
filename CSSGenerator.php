<?php
declare(strict_types=1); 
namespace Generator; 
use Exception; 
class CSSGenerator{
    protected string $fileExt = ".css"; 
    protected string $fileName; 
    protected array $formats;
    protected array $medias;  

    public function __construct(string $name)
    {
        $this->fileName = $name . $this->fileExt;
        $this->formats = array();  
        $this->medias = array(); 
    }

    public function addFormat(CSSFormat $format) : CSSGenerator{
      array_push($this->formats, $format); 
      return $this; 
    }

    public function addMedia(CSSMedia $media) : CSSGenerator{
      array_push($this->medias, $media);
      return $this; 
    }


    public function generateFile() : CSSGenerator{
      $dirPath = dirname($this->fileName); 
      if (!is_dir($dirPath)) {
        if (!mkdir($dirPath, 0755, true)) {
          throw new Exception("Failed to create directory: $dirPath");
        }
      }
        if(!$file = fopen($this->fileName, "c"))
        echo "Cannot create the " . $this->fileName; 
        
         foreach($this->formats as $format){
          if(!fwrite($file, $format->getTemplate() . "\n"))
          echo "Cannot write the file"; 
         }

         if(count($this->medias) > 0){
          foreach($this->medias as $media){
            if(!fwrite($file, $media->getTemplate() . "\n"))
            echo "Cannot write the file"; 
            foreach($media->getFormats() as $format){
            if(!fwrite($file, $format->getTemplate() . "\n"))
            echo "Cannot write the format within the media"; 
            }
            fwrite($file, $media->finish()); 
          }
         }
  
         echo "File successfully generated and written!"; 
         fclose($file); 
         return $this; 

        }


}








?>