<?php
/*
API : Increase vote count by 1 of the fruit selected
Release : 0.1 
Programmer : Arihant Jain (arihant92@gmail.com) 
*/

// Accepting GET variables with striping slashes and converting HTMLspecialchars to prevent SQL injection
$id= htmlspecialchars(stripslashes($_GET['id']));

// Requiring database connection congiguration file
require_once'connect.php';

// Query to update votes by current number of votes + 1 
$result=mysqli_query($conn,"UPDATE `fruits` SET `votes`=votes+1 WHERE id=$id");

if (mysqli_affected_rows($conn)) {
    
	echo 1;
}
else{
	echo 0;
	}

?>