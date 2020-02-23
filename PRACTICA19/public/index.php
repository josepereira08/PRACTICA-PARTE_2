<?php

require '../vendor/autoload.php';

use jp\User;

$user = new User(['name' => 'Jose', 'email' => 'jpyftsunami08@gmail.com']);

$user->id = 10;

echo $result = serialize($user);

file_put_contents('../storage/user.txt', $result);