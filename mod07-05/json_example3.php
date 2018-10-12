<script type="text/javascript">
	let lunch = {
		"kanin":"rice",
		"ulam" : {"name":"bicol express",
		"ingredients": ["sili","gata","pork"],
		"quantity": "200g",
		"calories_in_kcal":500}
		,
		"delicious":true
	}
lunch["price"] = "50 php";
// alert(lunch["price"]);
// alert(lunch);

lunch["price"] = "70 php";
alert(lunch.price);
lunch["price"] = "80 php";
alert(lunch.price);
lunch.ulam.name="Bicol Express Deluxe";
alert(lunch.ulam.name);
</script>