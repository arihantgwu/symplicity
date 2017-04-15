<?php
/*
API : Authenticate users
Release : 0.1 
Programmer : Arihant Jain (arihant92@gmail.com) 
*/

//Accepting POST variables with striping slashes and converting HTMLspecialchars to prevent SQL injection
$uname = htmlspecialchars(stripslashes($_POST['username']));
$pwd   = htmlspecialchars(stripslashes($_POST['password']));

// Requiring database connection congiguration file
require_once 'connect.php';

//Query to authenticate users
//Since this is a demo I am not encrypting the password otherwise I would have encrypted the passowrd 
$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$uname' AND password='$pwd'");

if ($result->num_rows > 0) {
    // output 1 if user authenticated
    while ($row = $result->fetch_assoc()) {
        echo 1;
    }
} else {
    echo 0;
}

?>