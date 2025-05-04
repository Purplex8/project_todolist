<?php

// настройка DB
define('DB_HOST', 'database');
define('DB_USER', 'root');
define('DB_PASS', 'purp');
define('DB_NAME', 'todo');

// физический путь к корневой директории скрипта
define('ROOT', dirname(__FILE__). '/');
define('HOST', 'http://' . $_SERVER['HTTP_HOST'] . '/');

//echo ROOT;
//echo '<br>';
//echo HOST;

//функции находятся сдесь а не в отдельном файле,
// потому что функций не так много

//функция print
function p($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

//функция print-die
function pd($var)
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
    die();
}