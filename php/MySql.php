<?php
echo"welcome to the staga  we are ready to get connected to a database";


/*
ways to connect a MySql Database
1.MySqli extension
2.PDO
*/
//connecting to database 
$servername ="localhost";
$username="root";
$password ="";
// create a connection 
$conn =mysqli_connect($servername, $username,$password);
echo "connection was successful";
?>