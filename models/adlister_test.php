<?php  
// require_once 'Model.php';
require_once 'Ads.php';
require_once 'User.php';

// var_dump(Ads::all());

$user = new User();

$user->name = 'True';
$user->email = 'makingaliving@livingemail.com';
$user->username = 'arewedoneyet';
$user->password = 'eighttosixteen';


$user->insertUser();

$ad = new Ads();


$ad->user_id = 6;
$ad->categories = 'expensive, shoes, clothing, smelly';
$ad->price = 10000.00;
$ad->email = "fuck@gmail.com";
$ad->item = 'New Pair of Important Shoes';
$ad->summary = 'Yeezy\'s shoes';
$ad->description = 'You will never know!!!';

$ad->insertAd();

?>