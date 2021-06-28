<?php

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'investment');
 

$link = mysqli_connect('localhost', 'root', '', 'investment');


// define('DB_SERVER', 'db4free.net:3306/investment__pro');
// define('DB_USERNAME', 'kelechioleh6');
// define('DB_PASSWORD', 'umunneochi');
// define('DB_NAME', 'investment__pro');

/* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>

<!-- Database: investment__pro
Username: kelechioleh6
Email: kelechioleh@gmail.com -->


<!-- Database: kenetic
Username: ken2121
Email: emmanueloleh101@gmail.com -->