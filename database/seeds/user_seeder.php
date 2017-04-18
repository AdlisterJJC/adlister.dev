<?php

require_once __DIR__ . '/../../models/User.php';

$userArray = [];

$user1 = new User;
$user1->name = 'Finn Mertens';
$user1->email = 'finn@fansofbilly.com';
$user1->username = "finn_the_human";
$user1->password = $_ENV['USER_PASS'];
$user1->save();
array_push($userArray, $user1);

$user2 = new User;
$user2->name = 'Jake';
$user2->email = 'jake@fansofbilly.com';
$user2->username = "jake_the_dog";
$user2->password = $_ENV['USER_PASS'];
$user2->save();
array_push($userArray, $user2);

$user3 = new User;
$user3->name = 'Simon Petrikov';
$user3->email = 'iceking@princessaholicanonymous.com';
$user3->username = "ice_king";
$user3->password = $_ENV['USER_PASS'];
$user3->save();
array_push($userArray, $user3);

$user4 = new User;
$user4->name = 'Marceline Abadeer';
$user4->email = 'marceline@vampirequeen.com';
$user4->username = "marceline_abadeer";
$user4->password = $_ENV['USER_PASS'];
$user4->save();
array_push($userArray, $user4);

// }