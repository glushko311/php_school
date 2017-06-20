<?php

function __autoload($class){
    $dirArray = ['/controllers/',
                 '/models/',
                 '/classes/',
                 '/views/'
                ];

    foreach($dirArray as $dir) {
        if (file_exists(__DIR__ . $dir . $class . '.php')) {

            require __DIR__ . $dir . $class . '.php';
            break;

        }
    }
}