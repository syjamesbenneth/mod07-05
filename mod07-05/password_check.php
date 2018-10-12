<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

  Enter password: <input type="text" name="password" id="password"> <br>
  Confirm password: <input type="text" name="confirmpw" id="confirmpw"> <br>
  <button id="checkPasswords">Check Passwords</button>
  <span id="result"></span>

  <script type="text/javascript">
  		$(document).ready(()=> {
  			$("#checkPasswords").click(()=> {
  				let pass1 = $("#password").val();
  				let pass2 = $("#confirmpw").val();
  				// alert(pass1);
  				// alert(pass2);
  				$.ajax({
  					"url": "process_password_check.php",
  					"data":{"pass1":pass1, "pass2":pass2},
  					"type": "POST",
  					"success": editHTML
  				});
  			});
  		});
  	
	const editHTML = (dataFromPhp) => {
		$("#result").html(dataFromPhp);
	}


  </script>
