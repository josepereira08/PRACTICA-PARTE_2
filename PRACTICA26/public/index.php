<?php

require "../vendor/autoload.php";

use jp\User;

$user = new User([
    'name' => 'daniel rojas',
    'birthDate' => '15/08/1960',
]);

echo "<p>{$user->name} tiene {$user->age} años";