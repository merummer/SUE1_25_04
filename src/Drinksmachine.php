<?php
namespace Merummer\Sue12504;

class Drinksmachine implements IDrinksmachine{

 public $getraenke = [
        ["Coca Cola", 250],
        ["Fanta" , 200],
        ["Sprite", 250]
     ];
    public function __construct()
    {

    }
    public bool $res;
    public int $counter = 0;
    public function dispense(string $drink): bool
    {

        foreach ($this->getraenke as $ge)
        {
            if ($ge[$this->counter][1]=250){
                $this->res = true;
                $this->counter +1;
            }
            else{
                $this->res = false;
            }
        }
        return $this->res;
    }
}