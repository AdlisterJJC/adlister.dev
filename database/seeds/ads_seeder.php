<?php

require_once __DIR__ . '/../../models/Ads.php';
include '../db_connect.php';
$dbc->exec('TRUNCATE ads'); 

// $ads = new Ads;
// $ads->date_posted = '';
// $ads->user_id = '';
// $ads->categories = '';
// $ads->price = '';
// $ads->email = '';
// $ads->item = "";
// $ads->summary = '';
// $ads->description = '';
// $ads->save();


// $ads = new Ads;
// $ads->date_posted = '';
// $ads->user_id = '';
// $ads->categories = '';
// $ads->price = '';
// $ads->email = '';
// $ads->item = "";
// $ads->summary = '';
// $ads->description = '';
// $ads->save();


// $ads = new Ads;
// $ads->date_posted = '';
// $ads->user_id = '';
// $ads->categories = '';
// $ads->price = '';
// $ads->email = '';
// $ads->item = '';
// $ads->summary = '';
// $ads->description = '';
// $ads->save();

$ads = new Ads;
$ads->date_posted = '1999-11-11';
$ads->user_id = 1;
$ads->categories = 'car';
$ads->price = 12929.29;
$ads->email = 'doingdumbshit@fakeemail.com';
$ads->item = "Tesla S";
$ads->summary = 'Fart box';
$ads->description = 'Expensive Economic Environmental Vehicle';
$ads->save();



