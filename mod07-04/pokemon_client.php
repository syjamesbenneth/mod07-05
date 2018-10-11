<!DOCTYPE html>
<html>
<head>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
	<title>Pokedex</title>
</head>
<body>

<h2>Choose between Pikachu, Bulbasaur, Squirtle, Charmander</h2>

Pokemon: <input type="text" name="pokemon" id="pokemoninput">
<button id="mybutton">I CHOOSE YOU!</button>

<!-- Output -->
<div id="jsonsection"></div>
<div id="outputsection"></div>

<!-- script -->
<script type="text/javascript">
	$(document).ready(()=>{
		$("#mybutton").click(()=>{
			let pokemon = $("#pokemoninput").val();
			// alert(pokemon);
			$.ajax({
				"url":"pokemon_server.php",
				"data":{"pokemonbeingsearched":
				pokemon},
				"type":"GET",
				"success": editHTML
			});
		});
	});
	//content of the editHTML function in success
	const editHTML = (jstring) => {
		$("#jsonsection").html("Received" + jstring);
		if(jstring != ""){
			let data = JSON.parse(jstring);
			$('#outputsection').html("");
			$('#outputsection').append("<hr>");
			$('#outputsection').append("Name: " + data.name + "<br>");
			$("#outputsection").append("Type: " + data.type + "<br>");
			$("#outputsection").append("Basic move: " + data.moves.basic + "<br>");
			$("#outputsection").append("Special move: " + data.moves.special + "<br>");
		} else {
			$("#outputsection").html("<hr>No info found");
		}
	}

</script>
</body>
</html>