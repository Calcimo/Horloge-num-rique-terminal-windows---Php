<?php
declare(strict_types = 1);
require_once "Led.class.php";

class Chiffre {

    private $lesLeds; //array leds
    private $position; //int position dans la window 
    private $valeur; //int valeur du chiffre
    
    public function __construct(int $valeur, int $position)
    {
        $allumage = [
            [true,true,true,true,true,true,false],//0
            [false,false,false,false,true,true,false],//1
            [true,false,true,true,false,true,true],//2
            [true,false,false,true,true,true,true],//3
            [false,true,false,false,true,true,true],//4
            [true,true,false,true,true,false,true],//5
            [true,true,true,true,true,false,true],//6
            [true,false,false,false,true,true,false],//7
            [true,true,true,true,true,true,true],//8
            [true,true,false,true,true,true,true]//9
        ];
        $x=[1,0,0,1,2,2,1];
        $y=[0,1,2,2,2,1,1];
        $orientation=["_","|","|","_","|","|","_"];
        $decal = [0,3,8,11,16,19];
        for ($i=0;$i<7;$i++) {
            $this->lesLeds[] = new Led($x[$i]+$decal[$position],$y[$i]+5,$allumage[$valeur][$i],$orientation[$i]);
        }
        $this->position = $position;
        $this->valeur = $valeur;
    }
    
    public function getLed(int $index):Led
    {
        return $this->lesLeds[$index];
    }
}