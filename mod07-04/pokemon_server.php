<?php 
$pokemonChosen = $_GET['pokemonbeingsearched'];
	$pikachu = ["name"=>"Pikachu",
				"type"=>"Electric",
				"moves"=>["basic"=>"Thundershock",
						"special"=>"Thunderbolt"]
	];

	$bulbasaur = ["name"=>"Bulbasaur",
			"type"=>"Grass",
			"moves"=>["basic"=>"Vine Whip",
					"special"=>"Solar Beam"]
	];


	$squirtle = ["name"=>"Squirtle",
			"type"=>"Water",
			"moves"=>["basic"=>"Bubble",
					"special"=>"Hydro Pump"]
	];

	$charmander = ["name"=>"Charmander",
			"type"=>"Fire",
			"moves"=>["basic"=>"Ember",
					"special"=>"Fire Blast"]
	];

	$pokedex = ['pikachu' => $pikachu,
				'bulbasaur'=> $bulbasaur,
				'squirtle'=> $squirtle,
				'charmander'=>$charmander];	


	if(array_key_exists($pokemonChosen, $pokedex)){
		//if key exists in the array specified return true else false
		echo json_encode($pokedex[$pokemonChosen]);
		//ex. $pokedex['pikachu'] -> $pikachu
	} else {
		echo "";
	}
 ?>