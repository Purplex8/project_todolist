<?php
    require_once(ROOT . 'libs/rb-mysql.php');

R::setup(
    'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
    DB_USER,
    DB_PASS
); //for both mysql or mariaDB