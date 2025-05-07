<?php

/*
$x = 10;
$y = 12;

function soma($x, $y) {
    echo $x + $y;
}

soma($x, $y);

Ao invés de estar colocando nos parâmetros da função as váriaveis, pode fazer utilizando a váriavel GLOBALS
*/


$x = 10;
$y = 12;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();