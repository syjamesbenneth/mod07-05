<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p id="summary"></p>

<!-- <p>

My name is <script type="text/javascript"> 
document.getElementById("p").innerHTML = myself.name;
<myself.name> </script>, I am <myself.age> years old, currently a student of Tuitt coding bootcamp. I like <hobbies> and to code. My rowmates are <myself.rowmates>
Oh by the way, I have a pet <myself.pet.species>, her name is <myself.pet.name>

</p> -->

<script type="text/javascript">
let myself = {
			"name": "John", 
			"age": 31, 
			"hobbies": ["Sleeping", "Procrastinating"],
			"rowmates": ["Gege", "Bebe", "Baba"],
			"pet": {"name":"Micron",
				"species":"parakeet",
		}
		};

		// to access a value: json_name.key;
		alert(myself.name);

		// //Q how to access hobbies?

		// for(i=0; i < myself.hobbies.length; i++){
		// 	alert(myself.hobbies[i]);
		// }
		// alert(myself.hobbies);
		// //Q. How do i call"Micro the parakeet"
		// alert(myself.pet.name + " the " + myself.pet.species);

		let str = "My name is " + myself.name + ",I am " + myself.age + " years old, currently an instructor of Tuitt Coding Bootcamp.";
		let str2 = "I like " + myself.hobbies + " and to learn coding.";
		let str3 = "My coworkers are " + myself.rowmates +".";
		let str4 = "Oh by the way I have a pet " + myself.pet.species + ". And ";
		let str5 = "";
		if (myself.pet.gender = "M") {
			str5 == "his";
			} else {
				str5 == "her";
			}
		
		let str6 = "name is " + myself.pet.name;
		let last_str = str4 + str5 + str6;
		$("#summary").html(str);
		$("#summary").append(str2);
		$("#summary").append(str3);
		$("#summary").append(last_str);
</script>



</body>
</html>