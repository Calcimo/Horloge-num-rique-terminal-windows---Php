<?php
declare(strict_types = 1);
require_once "Window.class.php";
require_once "HorlogeNumerique.class.php";

class LanceurHorlogeNumerique {

    public function lancer()
    {
        $window = new Window(80,20);
        $horloge = new HorlogeNumerique;

        $horloge->setHeures(9);
        $horloge->setMinutes(15);
        $horloge->setSecondes(47);
        $horloge->dessiner( $window, 10, 10 );
    }

    public function lancerAutomatique()
    {
        $window = new Window(80,20);
        $horloge = new HorlogeNumerique;

        $verif = true;
        while($verif == true) {
            $heure = getdate();
            $horloge->setHeures($heure["hours"]);
            $horloge->setMinutes($heure["minutes"]);
            $horloge->setSecondes($heure["seconds"]);
            $horloge->dessiner( $window, 10, 10 );
            sleep(1);
        }
    }

    public function lancerDecompte(int $heure, int $m2inute)
    {
        $window = new Window(80,20);
        $horloge = new HorlogeNumerique;

        $verif = true;
        while($verif == true) {
            $heure = getdate();
            $horloge->setHeures($heure["hours"]);
            $horloge->setMinutes($heure["minutes"]);
            $horloge->setSecondes($heure["seconds"]);
            $horloge->dessiner( $window, 10, 10 );
            sleep(1);
        }
    }
}