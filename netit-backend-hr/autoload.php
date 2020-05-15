<?php

session_start();

//----------------------------------------------------------------
spl_autoload_register(function($element) {
    $collection = explode('\\', $element);
    $newPath = ".";
    foreach ($collection as $value) {
        $newPath = $newPath . '/' . $value;
    }
    $newPath = $newPath . '.php';
    include $newPath;
});
