<?php 
$apple_details = ["name"=>"apple", "price"=>10, "desc"=>"a juicy red apple"];
$orange_details=["name"=>"orange","price"=>15, "desc"=>"the fruit, not the color"];
$grape_details=["name"=>"grape","price"=>20,"desc"=>"can be made into wine"];
$lemon_details=["name"=>"lemon","price"=>20,"desc"=>"can be made into wine"];

$item_details = ["", $apple_details,$orange_details, $grape_details,$lemon_details];
$index =$_GET['id'];
echo "Product:" . $item_details[$index]['name']."<br>";
echo "SRP:" . $item_details[$index]['price']."<br>";
echo "Description:" . $item_details[$index]['desc']."<br>";

// $item_details=[
// 	"",
// 	["name: "=>"apple","orange","grape"],
// 	["price: "=>10,20,30],
// 	["Description: "=>["a juicy red apple"],["a juicy orange"]]
// 	];//, = skips index 0.
// foreach($item_details as $key=>$value){
// echo $key.$value."<br>";

// }
?>