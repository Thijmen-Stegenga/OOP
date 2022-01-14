<?php 

	require "Attack.php";
	require "Weakness.php";
	require "Resistance.php";

	class Pokemon {
		public static $populationPokemons;
		private $name;
		private $energyType;
		private $hitPoints;
		private $health;
		private $attacks;
		private $weakness;
		private $resistance;
		
		public function __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance) {
        	$this->name = $name;
        	$this->energyType = $energyType;
        	$this->hitPoints = $hitPoints;
        	$this->health = $hitPoints;
        	$this->attacks = $attacks;
        	$this->weakness = $weakness;
        	$this->resistance = $resistance;
			self::$populationPokemons++;
    	}
		
		public function attack($target, $attackNumber) {
			$target->receiveDamage($this->attacks[$attackNumber], $this->energyType);
			return $this->attacks[$attackNumber]->name;
		}
		
		private function receiveDamage($attack, $energyType) {
			if ($energyType == $this->weakness->energyType) {
				$attack->damage *= $this->weakness->weaknessMultiplier;
			}
			else if ($energyType == $this->resistance->energyType) {
				$attack->damage -= $this->resistance->resistanceValue;
			}
			$this->health -= $attack->damage;
			if ($this->health <= 0) {
				self::$populationPokemons--;
			}
		}
		
		public static function getPopulation() {
			return self::$populationPokemons;
		}
		
		public function getName() {
			return $this->name;
		}
		
		public function getHealth() {
			return $this->health;
		}
		
		public function getHitpoints() {
			return $this->hitPoints;
		}	
		
		// public function stats(){
  //       return
  //       "Name: ". $this->getName(). "<br>".
  //       "Health: ". $this->getHitpoints()."<br>";
  //       }    
	}