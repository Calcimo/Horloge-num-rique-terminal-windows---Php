<?php
declare(strict_types = 1);
require_once "Chiffre.class.php";
require_once "Window.class.php";

class HorlogeNumerique {

    private $lesChiffres; //array Chiffre

    public function __construct(int $heure=0, int $minute=0, int $seconde=0) 
    {
        //Heures
        if ($heure < 10) {
            $this->lesChiffres[] = new Chiffre(0,0);
            $this->lesChiffres[] = new Chiffre($heure,1);
        }
        else {
            $this->lesChiffres[] = new Chiffre(intval($heure/10),0);
            $this->lesChiffres[] = new Chiffre($heure%10,1);
        }
        $this->heure = $heure;

        //Minutes
        if ($minute < 10) {
            $this->lesChiffres[] = new Chiffre(0,2);
            $this->lesChiffres[] = new Chiffre($minute,3);
        }
        else {
            $this->lesChiffres[] = new Chiffre(intval($minute/10),2);
            $this->lesChiffres[] = new Chiffre($minute%10,3);
        }
        $this->minute = $minute;
        //Secondes
        if ($seconde < 10) {
            $this->lesChiffres[] = new Chiffre(0,4);
            $this->lesChiffres[] = new Chiffre($seconde,5);
        }
        else {
            $this->lesChiffres[] = new Chiffre(intval($seconde/10),4);
            $this->lesChiffres[] = new Chiffre($seconde%10,5);
        }
        $this->seconde = $seconde;
    }

    public function setHeures(int $heure)
    {
        if ($heure < 10) {
            $this->lesChiffres[0] = new Chiffre(0,0);
            $this->lesChiffres[1] = new Chiffre($heure,1);
        }
        else {
            $this->lesChiffres[0] = new Chiffre(intval($heure/10),0);
            $this->lesChiffres[1] = new Chiffre($heure%10,1);
        }
        $this->heure = $heure;
    }

    public function setMinutes(int $minute)
    {
        if ($minute < 10) {
            $this->lesChiffres[2] = new Chiffre(0,2);
            $this->lesChiffres[3] = new Chiffre($minute,3);
        }
        else {
            $this->lesChiffres[2] = new Chiffre(intval($minute/10),2);
            $this->lesChiffres[3] = new Chiffre($minute%10,3);
        }
        $this->minute = $minute;
    }

    public function setSecondes(int $seconde)
    {
        if ($seconde < 10) {
            $this->lesChiffres[4] = new Chiffre(0,4);
            $this->lesChiffres[5] = new Chiffre($seconde,5);
        }
        else {
            $this->lesChiffres[4] = new Chiffre(intval($seconde/10),4);
            $this->lesChiffres[5] = new Chiffre($seconde%10,5);
        }
        $this->seconde = $seconde;
    }

    public function dessiner(Window $window, int $x, int $y){
        for ($j=0;$j<sizeof($this->lesChiffres);$j++){
            for ($i=0;$i<7;$i++) {
                $window->setFrontColor("Black");
                if($this->lesChiffres[$j]->getLed($i)->getAllume()){
                    $window->setFrontColor("Green");
                }
                
                $dX = $this->lesChiffres[$j]->getLed($i)->getX()+$x;
                $dY = $this->lesChiffres[$j]->getLed($i)->getY()+$y;
            
                $window->write($dX,$dY,$this->lesChiffres[$j]->getLed($i)->getSigne());
            }
        }
    }
}