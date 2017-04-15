<?php
/*
API : Get all fruits
Release : 0.1 
Programmer : Arihant Jain (arihant92@gmail.com) 
*/

// Requiring database connection congiguration file
require_once'connect.php';

// Query to select all options of fruits from the fruits table
$result=mysqli_query($conn,"SELECT * FROM fruits order by votes DESC");

if ($result->num_rows > 0) {
    while($r = mysqli_fetch_assoc($result)) {
	$fruitsArray[]=$r;	
	}
	//encoding the result array to JSON
	echo json_encode($fruitsArray);
}
else{
	echo 0;
	}



?>