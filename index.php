<?php
namespace Merummer\Sue12504;
require 'vendor/autoload.php';
$drink1 = new \Merummer\Sue12504\Drinksmachine();
echo $drink1->dispense("Fanta");

$drink2 = new Drinksmachine();
echo $drink2->dispense("Coca Cola");
