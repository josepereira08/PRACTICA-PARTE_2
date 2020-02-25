<?php

require '../vendor/autoload.php';

use jp\User;
use jp\Food;
use jp\LunchBox;

$gordon = new User(['name' => 'jose']);


$joanie = new User(['name' => 'laura']);

$lunchBox = new LunchBox(['Sandwich', 'Papas', 'Jugo de naranja', 'Manzana']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich', 'beverage' => false]),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true]),
]);


$joanie->setLunch($lunchBox);


$joanie->eatMeal();


