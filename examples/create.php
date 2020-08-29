<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;
//use Source\Models\Address;

$user = new User();

$user->first_name = 'Pedro';
$user->last_name = 'Mussolino';
$user->genre = 'Male';
$user->save();

//$address = new Address();
//$address->add($user, 'Rua Augusta', '123');
//$address->save();

var_dump($user);
