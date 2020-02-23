<?php

use jp\User;

require '../vendor/autoload.php';

$user = new User();

$user->fill([
    'first_name' => 'Jose',
    'last_name' => 'Pereira',
]);

$user->nickname = 'Silence';

unset($user->nickname);

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";

if (isset ($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}



