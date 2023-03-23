<?php
$servername ="localhost";
$username="root";
$password ="";
// create a connection 
$conn =mysqli_connect($servername, $username,$password);
//create a db
$sql ="CREATE DATABASE dbparvej9";
mysqli_query($conn,$sql);
echo "the result is ";
echo var_dump($reult);

//die if connection was not successful
if (!$conn){
    die("sorry we field to connect :".mysqli_connect_error());

}
else{
echo "connection was successful";
}

?>