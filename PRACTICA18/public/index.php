<?php

use jp\HtmlNode;


require '../vendor/autoload.php';



$node = HtmlNode::textarea('jp')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));