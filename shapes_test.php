<?php 
include_once 'Rectangle.php';
include_once 'Square.php';


$test = new Rectangle(50,30);
$test->area();

$stest = new Square(25);
$stest->area();
$stest->perimeter();

var_dump($test);
// $test->height = 40;
$test = new Rectangle(50,30);


$test->content = 'trash';
$stest->width = 'whaaa';

var_dump($test);
var_dump($stest);