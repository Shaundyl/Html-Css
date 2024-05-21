<?php
declare(strict_types=1); 
namespace Main; 
class AutoLoad{
      protected string $namespace; 

      public function __construct(string $namespace)
      {
        $this->namespace = $namespace; 
      }
      public function autoload($class){
        $explodedClass = explode('\\', $class);
        $classPath = array_shift($explodedClass) . '\\'; 
        foreach ($explodedClass as $dir) {
           
            $classPath .= $dir . '\\';
        }
        if ($classPath[strlen($classPath) - 1] === '\\') {
            $classPath = substr($classPath, 0, -1); 
        }
        
         $classPath = str_replace($this->namespace . "\\", "",$classPath) . '.php'; 
        if (file_exists($classPath)) {
            require_once $classPath;
            return true;
         } else{
            return false; 
         }
      }

      public function register(){
        spl_autoload_register("autoload"); 
      }
}

?>