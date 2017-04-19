<?php

require_once __DIR__ . '/../../models/Ads.php';
include '../db_connect.php';

$dbc->exec('TRUNCATE ads'); 

$ads = new Ads;
$ads->date_posted = '1999-11-11';
$ads->user_id = 1;
$ads->categories = 'car, expensive, tesla s, vehicle, automobile, electric vehicle';
$ads->price = 12929.29;
$ads->email = 'doingdumbshit@fakeemail.com';
$ads->item = "Tesla S";
$ads->summary = 'Fart box';
$ads->description = 'Expensive Economic Environmental Vehicle';
$ads->save();

$ads = new Ads;
$ads->date_posted = '2016-11-20';
$ads->user_id = 2;
$ads->categories = 'car, automobile, vehicle, scooter, motorcycle';
$ads->price = 300.00;
$ads->email = 'doinglessdumbshit@almostrealemail.com';
$ads->item = 'Broken Scooter';
$ads->summary = 'A scooter that is broken';
$ads->description = 'BROKEN DOWN fix it mane';
$ads->save();

$ads = new Ads;
$ads->date_posted = '2017-04-18';
$ads->user_id = 3;
$ads->categories = 'shoes, nike, running, clothes, athletic, clothing';
$ads->price = 100.00;
$ads->email = 'doingthings@totallylegitemail.com';
$ads->item = "Nike Shoes?";	
$ads->summary = 'A pair of artisan running shoes';
$ads->description = 'The most decent pair of shoes you will wear for a couple of months.';
$ads->save();

$ads = new Ads;
$ads->date_posted = '2017-4-20';
$ads->user_id = 4;
$ads->categories = 'glasses, clothes, clothing, reading, vision';
$ads->price = 20.00;
$ads->email = 'seethingsbetter@seemail.com';
$ads->item = "Reading Glasses for any one with a head";
$ads->summary = 'Glasses for reading in the summer time light';
$ads->description = 'Authentic pieces of glass attached to a framing apparatus hanging on to the cranium of apes.';
$ads->save();










