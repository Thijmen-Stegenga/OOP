<?php
	class Pikachu extends Pokemon {
		
		public function __construct($name) {
		 	$energyType = new EnergyType(name : EnergyType::LIGHTNING, energyTypeValue : EnergyType::LIGHTNING);
		 	$hitPoints = 60;
		 	$attacks = [new Attack(attack : 'Electric Ring', damage : 50), new Attack(attack : 'Pika Punch', damage : 20)];
		 	$weakness = new Weakness(multiplier: 1.5, energyType: 'Fire');
		 	$resistance = new Resistance(resistanceValue : 20, energyType: EnergyType::FIRE);
		 	parent:: __construct($name, $energyType, $hitPoints, $attacks, $weakness, $resistance);
		}
	}