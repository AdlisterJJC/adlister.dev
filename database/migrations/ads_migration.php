
<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

// drop table
$query = 'DROP TABLE IF EXISTS ads;';

$dbc->exec($query);

// Create the table and assign to variable
$ads = 'CREATE TABLE IF NOT EXISTS ads (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	date_posted CURDATE() NOT NULL,
    name VARCHAR(240) NOT NULL,
    email VARCHAR(240) NOT NULL,
    item VARCHAR (30) NOT NULL,
    summary VARCHAR(100) NOT NULL,
    description VARCHAR(500),
    PRIMARY KEY(id),
    FOREIGN KEY (email), REFERENCES users(email); 

)';

// Run query, if there are errors they will be thrown as PDOExceptions

$dbc->exec($query);

?>