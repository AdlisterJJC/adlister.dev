<?php

$_ENV = require '../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS users');

$query = 'CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) UNIQUE KEY NOT NULL,
    username VARCHAR(20) UNIQUE KEY NOT NULL,
    password VARCHAR(200) NOT NULL,
    PRIMARY KEY (id)
    
)';

$dbc->exec($query);

