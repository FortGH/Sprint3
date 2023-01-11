<?php
require "classTigger.php";

$tigger = Tigger::getInstance();

$tigger -> roar();
$tigger -> roar();
$tigger -> roar();
$tigger -> roar();
$tigger -> roar();
$tigger -> getTotalRoar();

$tigger1 = Tigger::getInstance();
$tigger1 -> roar();
$tigger1 -> getTotalRoar();
?>