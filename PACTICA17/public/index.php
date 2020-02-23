<?php

use jp\HtmlNode;

require '../vendor/autoload.php';



$node = HtmlNode::textarea('jp')
    ->name('content')
    ->id('contenido');


$node = new HtmlNode('textarea', 'jp', ['name' => 'content', 'id' => 'contenido']);



echo $node->render();