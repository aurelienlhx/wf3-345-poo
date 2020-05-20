<?php

/**
 * POO Programmation orientée objet
 */

/**
 * Mon plan/moule est une classe qui va me permettre de créer (ou instancier) des objets
 */
class Voiture {

	/**
	 * Ma classe possède des caractéristiques qui sont ses propriétés
	 * Ses propriétés peuvent avoir des valeurs par défaut qui seront aussi celles de l'objet créé
	 * Les propriétés sont spécifiques à une instance/objet
	 */

	/**
	 * La couleur est une propriété avec une portée publique et est accessible depuis l'exterieur de notre objet
	 * @var string
	 */
	public $couleur;

	/**
	 * @var int
	 */
	public $vitesse_max = 130;

	/**
	 * @var string
	 */
	public $marque;

	/**
	 * @var int
	 */
	public $nb_portes = 5;

	/**
	 * @var int
	 */
	public $nb_places = 5;

	/**
	 * Le moteur est une propriété avec une portée privée et n'est pas accessible de l'extérieur
	 * Il est seulement accessible depuis l'intérieur de notre objet
	 * @var string
	 */
	private $moteur = 'V5';

	/**
	 * @var bool
	 */
	private $nitro_en_cours = false;

	/**
	 * @var bool
	 */
	private $klaxon_en_cours = false;

	
	/**
	 * Les constantes sont communes à toutes les instances/objets
	 */
	/**
	 * @var int
	 */
	public const NBROUES = 4;



	/**
	 * Méthode de construction de notre objet
	 * C'est la méthode qui est appelé par defaut lorsque l'on fait un new Voiture dans le code
 	 */
	public function __construct(string $couleur, string $marque, int $vitesse_max = 130) {

		$this->couleur = $couleur;
		$this->marque = $marque;
		$this->vitesse_max = $vitesse_max;

		//Un constructeur retourne automatiquement une instance de classe
		//On ne peut donc rien lui spécifier à retourner
	}

	/**
	 * Ma classe possède des actions 
	 * Les actions/fonctions de ma classe sont des méthodes qui peuvent être appellé sur un objet depuis l'exterieur ou l'intérieur
	 */
	public function demarrer(bool $conducteur_alcoolise = false, int $delai = 30 ):string {
		if($conducteur_alcoolise === false) {
			return 'La voiture démarre après un delai de '.$delai.'s <br/>';
		}else{
			return 'La voiture ne démarre pas <br/>';
		}
	}

	/**
	 * Le mot this fait référence à l'objet/instance que l'on est en train de manipuler
	 */
	public function avancer(int $vitesse = 90):string {
		
		if( $vitesse > $this->vitesse_max){
			return 'La voiture avance à '.$this->vitesse_max. '<br/>';
		}else{			
			return 'La voiture avance à '.$vitesse. '<br/>';
		}
		
	}

	public function reculer() {
		return 'La voiture recule <br/>';
	}

	public function tourner(string $direction):string {
		return 'La voiture tourne à '.$direction. '<br/>';
	}

	public function activer_nitro():string {

		$this->nitro_en_cours = true;

		//On imagine que ce sont des secondes
		//La nitro s'arrête au bout de 5s
		for($i = 0; $i<5; $i++){
			$this->nitro_en_cours = false;
		}

		return 'La voiture va super vite <br/>';
	}

	public function activer_klaxon(string $son = 'tututut'):string {

		$this->klaxon_en_cours = true;

		return 'La voiture klaxonne '.$son.'<br/>';
	}

	/**
	 * Je récupère ma constante NBROUES depuis l'intérieur de ma classe grâce à self
	 * Le mot self fait référence à la classe
	 */
	public function infos_sur_la_voiture() {
		return 'Je suis la voiture de couleur '.$this->couleur.' et de marque '.$this->marque.' mais comme toutes les voitures, j\'ai '.self::NBROUES.' roues';
	}

}