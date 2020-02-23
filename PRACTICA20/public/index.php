<?php

require '../vendor/autoload.php';

use jp\User;
use jp\LunchBox;

$gordon = new User(['name' => 'luis']);

// Daughters
$joanie = new User(['name' => 'jesus']);

$haley = new User(['name' => 'laura']);

$lunchBox = new LunchBox(['Sandwich']);

$lunchBox2 = clone($lunchBox);

// House
$joanie->setLunch($lunchBox);

$haley->setLunch($lunchBox2);



$joanie->eat();

$haley->eat();

var_dump($lunchBox, $lunchBox2);




