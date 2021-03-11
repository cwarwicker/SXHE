<?php
set_include_path(__DIR__.'/classes');

spl_autoload_register(function ($class) {

    $file = get_include_path()."/".$class . '.php';
    $file = str_replace("\\", "/", $file);
    if (file_exists($file)) {
        require_once $file;
    } else {
        echo "File not found";
    }

});