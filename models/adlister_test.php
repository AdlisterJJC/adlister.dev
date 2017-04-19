<?php  
// require_once 'Model.php';
require_once 'Ads.php';
require_once 'User.php';

// var_dump(Ads::all());

$user = new User();

$user->name = 'Billy?';
$user->email = 'makingaliving@livingemail.com';
$user->username = 'arewedoneyet';
$user->password = 'eighttosixteen';


$user->insertUser();

?>