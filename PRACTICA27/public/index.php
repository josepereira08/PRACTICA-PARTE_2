<?php

require "../vendor/autoload.php";

use jp\User;

$user = new User([
    'first_name' => 'daniel',
    'last_name' => 'rojas',
    'birthDate' => '15/08/1960',
]);

echo "<p>{$user->full_name} tiene {$user->age} años";