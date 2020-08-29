<?php

require __DIR__ . "/../vendor/autoload.php";

use Source\Models\User;

//use CoffeeCode\DataLayer\Connect;
//
//$conn = Connect::getInstance();
//$error = Connect::getError();
//
//if ($error) {
//    echo $error->getMessage();
//    die();
//}
//
//$query = $conn->query("SELECT * FROM users")->fetchAll();
//var_dump($query);

$user = new User();
$list = $user->find()->fetch(true);

foreach ($list as $userItem) {
    var_dump($userItem->data->first_name);
    foreach ($userItem->addresses() as $address) {
        var_dump($address->street);
    }
}

