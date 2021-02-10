<?php
declare(strict_types = 1);

class Led {
    private $x; //int position x dans la window
    private $y; //int position y dans la window
    private $allume; //bool etat de la led
    private $signe; //string type de caractère

    public function __construct(int $x, int $y, bool $allume, string $signe)
    {
        $this->x = $x;
        $this->y = $y;
        $this->allume = $allume;
        $this->signe = $signe;
    }

    public function getX():int
    {
        return $this->x;
    }

    public function getY():int
    {
        return $this->y;
    }

    public function getSigne():String
    {
        return $this->signe;
    }

    public function getAllume():bool
    {
        return $this->allume;
    }

}