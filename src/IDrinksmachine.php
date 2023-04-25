<?php
namespace Merummer\Sue12504;

interface IDrinksmachine{
    public function dispense(string $drink):bool;
}