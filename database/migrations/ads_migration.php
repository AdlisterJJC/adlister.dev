<?php

$_ENV = include '.env.php';
include_once 'user_migration.php';

// drop table
$query = 'DROP TABLE IF EXISTS ads;';

$dbc->exec($query);

// Create the table and assign to variable
$ads = 'CREATE TABLE IF NOT EXISTS ads (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	date_posted DATE NOT NULL,
    user_id INT UNSIGNED NOT NULL,
    categories VARCHAR(200) NOT NULL,
    price DOUBLE(24,2) NOT NULL, 
    email VARCHAR(240) NOT NULL,
    item VARCHAR (27) NOT NULL,
    summary VARCHAR(50) NOT NULL,
    description VARCHAR(500),
    PRIMARY KEY(id),
   	FOREIGN KEY (user_id) REFERENCES users (id)
 
)';

// Run query, if there are errors they will be thrown as PDOExceptions

$dbc->exec($ads);

?>