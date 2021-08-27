<?php

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $class = str_replace('App', 'src', $class);
    $class = str_replace('Core', 'core', $class);

    if (file_exists(ROOT . '/' . $class . '.php')) {
        include(ROOT . '/' . $class . '.php');
    } else {
        throw new \Exception('Class ' . $class . ' not found');
    }
});
