<?php 

include_once 'Model.php';
include_once 'User.php';

$test = new Model();

$test->bigfnn = "trash";

// echo $test->iwanna = "die";

// var_dump($test);

// echo $test->yaya;

echo User::getTableName() . PHP_EOL;

