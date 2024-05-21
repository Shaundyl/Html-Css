<?php
function autoload($class){
  $explodedClass = explode('\\', $class);
  $classPath = array_shift($explodedClass) . '\\'; 
  foreach ($explodedClass as $dir) {
     
      $classPath .= $dir . '\\';
  }
  if ($classPath[strlen($classPath) - 1] === '\\') {
      $classPath = substr($classPath, 0, -1); 
  }
  
   $classPath = str_replace("Generator\\", "",$classPath) . '.php'; 
  if (file_exists($classPath)) {
      require_once $classPath;
      return true;
   } else{
      return false; 
   }
}

?>