<?php
spl_autoload_register(function($className){
    //echo $className;
    $filename = $className.".php";
    //echo $filename;
    if(file_exists($filename)){
        include $filename;
    }

});