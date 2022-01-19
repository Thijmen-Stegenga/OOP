<?php 
	
	require "Pokemon.php";
	require "Charmeleon.php";
	require "Pikachu.php";


	$pikachu = new Pikachu(name :'Pikachu');
	$charmeleon = new Charmeleon(name :'Charmeleon');

	 echo ('<pre>'. $pikachu->stats() . '</pre>');
	 echo ('<pre>'. $charmeleon->stats() . '</pre> <br> <br> ');


	echo $pikachu->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $pikachu->getHitPoints();
	echo '<br>' . $pikachu->getName() . ' Attacks ' . $charmeleon->getName() . ' with a ' . $pikachu->attack(target: $charmeleon, attackNumber: 0) . ' attack ' . '<br>';
	echo $charmeleon->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $charmeleon->getHitPoints() . '<br>';

    echo '<br>'; 

	echo $charmeleon->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $charmeleon->getHitPoints();
	echo '<br>' . $charmeleon->getName() . ' Attacks ' . $pikachu->getName() . ' with a ' . $charmeleon->attack(target: $pikachu, attackNumber: 1) . ' attack ' . '<br>';
	echo $pikachu->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $pikachu->getHitPoints() . '<br>';
	
	// echo '<br>'; 

	// echo $pikachu->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $pikachu->getHitPoints();
	// echo '<br>' . $pikachu->getName() . ' Attacks ' . $charmeleon->getName() . ' with a ' . $pikachu->attack(target: $charmeleon, attackNumber: 1) . ' attack ' . '<br>';
	// echo $charmeleon->getName() . ' health : ' . $charmeleon->getHealth() . ' / ' . $charmeleon->getHitPoints() . '<br>';


	// echo '<br>' . $charmeleon->getName() . ' Attacks ' . $pikachu->getName() . ' with a ' . $charmeleon->attack(target: $pikachu, attackNumber: 0) . ' attack ' . '<br>';
	// echo $pikachu->getName() . ' health : ' . $pikachu->getHealth() . ' / ' . $pikachu->getHitPoints() . '<br>';
	// echo ' There are ' . Pokemon::getPopulation() . ' pokemon(s) alive! ';

