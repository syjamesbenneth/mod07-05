
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>


	<label for="nameToCheck">Name to check:</label>
	<input type="text" name="name" id="nametoCheck">
	<span id="result"></span>


<script type="text/javascript">
$(document).ready(()=> {
	$("#nametoCheck").keypress((keyboard)=>{
			if(keyboard.which === 13) {
				let nametoCheck = $("#nametoCheck").val();
			
			// alert(nametoCheck);
			//send data
				$.ajax({
					"url" : "process_name_check.php",
					"data": {"nameToCheck":nametoCheck},
					"type": "GET",
					"success": (data) => { //data is whatever server sends
						console.log(data);
					$('#result').html(data);
						// if(data == "true") {
						// 	$("#result").html("User already exists");
						// } else {
						// 	$("#result").html("User name is still available");
						// }
						//TODO: throw the data to the span
					}
					//create a function that does the following - if data received is true, it should display in a span "user already exists" else it should display "user name is still available"


					
				});
			}
		});
	});


</script>