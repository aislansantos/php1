<?php

/* PSR-4 -> ela pede que toda a classe pertença a um namespace, que deve  seguir um padrão especifico compativel
com a PRS-4 */

spl_autoload_register(function($class){
    $baseDir = __DIR__.'\classes\\';
    $file = $baseDir.'\\'.$class.'.php';
    if(file_exists($file)){
        require $file;
    }
}); 
