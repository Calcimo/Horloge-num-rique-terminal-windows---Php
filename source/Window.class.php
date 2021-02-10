<?php
declare(strict_types = 1);

/**
 * Une classe sommaire d'affichage en mode texte. 
 * 
 * référence ANSI/VT100 Terminal Control Escape Sequences
 * 
 * @author Gilles Valette
 */

class Window {

   private $w; // int largeur
   private $h; // int hauteur
   
    /**
     * Constructeur de la classe. Efface la fenêtre après initialisation des attributs.
     * 
     * @param $w largeur en pixels
     * @param $h hauteur en pixels
	 *
     **/   
	public function __construct(int $w=80, int $h=10) {
       $this->w = $w;
       $this->h = $h;
	   $this->clear();
   }
   
    /**
    * Destructeur de la classe : remet les choses en état...
	*
    **/   
    public function __destruct() {
		// couleur blanche
		echo "\033[37m";
		// go après window		
		echo "\033[{$this->h};0H";
    }
   
    /**
     * Efface la fenêtre avec un fond noir.
	 *
     **/   
    public function clear() : void {
	   // fond noir
	   echo "\033[40m";
	   // go home
	   echo "\033[H";
	   for ($i=0; $i<$this->h; $i++) {
			for ($j=0; $j<$this->w; $j++) {
				echo " ";
			}
			echo "\n";
	   }      
	}
	
    /**
     * Affiche un caractère à la position donnée.
	 *
     * @param $x position horizontale du caractère
     * @param $y position verticale du caractère
     * @param $s caractère (ou chaîne) à afficher
	 *
     **/   
	public function write(int $x, int $y, string $s) : void {
		// go x y
		echo "\033[{$y};{$x}H";
		echo $s;
	}
	
    /**
     * Place le curseur en bas et à gauche de la fenêtre.
	 *
	 *
     **/   	
	public function resetCursor() : void {
		echo "\033[{$this->h};0H";
	}
	
    /**
     * Place le curseur en surbrillance ou non. Ne fonctionne pas sur tous les systèmes.
	 *
     * @param $bright booléen 
	 *
     **/   
	public function setBrightFrontColor(bool $bright) : void {
		if ($bright) {
			echo "\033[1m";
		} else {
			echo "\033[2m";
		}
	}
	
    /**
     * Place le curseur dans la couleur passée en paramètre.
	 *
     * @param $color couleur désirée (chaîne de caractères) 
	 *
     **/   
	public function setFrontColor(string $color) : void {
		if ($color=="White") {
			echo "\033[37m";
		} elseif ($color=="Black")  {
			echo "\033[30m";
		} elseif ($color=="Red")  {
			echo "\033[31m";
		} elseif ($color=="Green")  {
			echo "\033[32m";
		} elseif ($color=="Yellow")  {
			echo "\033[33m";
		} elseif ($color=="Blue")  {
			echo "\033[34m";
		} elseif ($color=="Magenta")  {
			echo "\033[35m";
		} elseif ($color=="Cyan")  {
			echo "\033[36m";
		}
	}
	
    /**
     * Efface le terminal.
	 *
 	 *
     **/   
	public function clearScreen() : void {
		echo "\033[2J";
	}
   
}
