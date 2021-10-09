<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);

use Flower\Lily\Lily;

$a = new Lily();
$result = $a->desc();
var_dump($result);//