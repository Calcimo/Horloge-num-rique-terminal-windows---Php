<?php
declare(strict_types = 1);
require_once "Window.class.php";
require_once "Chiffre.class.php";
require_once "HorlogeNumerique.class.php";
require_once "LanceurHorlogeNumerique.class.php";

/*
$maWindow = new Window(80,80);

echo"\n";

$monSept = new Chiffre(7,0);
var_dump($monSept);

$maWindow->write(25,25,"o");
$maWindow->write(27,25,"i");
$maWindow->write(25,27,"o");

echo"\n";

$w2 = new Window(60,20);

$w2->clear();
for ($i=0;$i<7;$i++) {
    //$maWindow->setFrontColor("Black");
    //$w2->setFrontColor("Green");
    
    if($monSept->getLed($i)->getAllume()){
        $w2->setFrontColor("Green");
    }
    
    $dX = $monSept->getLed($i)->getX()+10;
    $dY = $monSept->getLed($i)->getY()+10;

    $w2->write($dX,$dY,$monSept->getLed($i)->getSigne());
}


echo $monSept->getLed(4)->getX()."\n";
echo $monSept->getLed(4)->getY()."\n";
echo $monSept->getLed(4)->getSigne()."\n";



$maWindow->write($monSept->getLed(0)->getX(),$monSept->getLed(0)->getY(),$monSept->getLed(0)->getSigne());
echo "test\n";

$w2 = new Window(60,10);

// $monSept = new Chiffre(3,3);

// for ($i=0;$i<7;$i++) {
//     $w2->setFrontColor("White");
//     if($monSept->getLed($i)->getAllume()){
//         $w2->setFrontColor("Green");
//     }
    
//     $dX = $monSept->getLed($i)->getX();
//     $dY = $monSept->getLed($i)->getY();

//     $w2->write($dX,$dY,$monSept->getLed($i)->getSigne());
// }

//$w2->clear();

// $monHorloge = new HorlogeNumerique(8,00,00);
// //var_dump($monHorloge);

// $window = new Window(80,20);

 $monHorloge->dessiner( $window, 10, 10 );
*/
$monLanceur = new LanceurHorlogeNumerique();
$monLanceur->lancerAutomatique();
