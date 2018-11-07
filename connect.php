<?php
$servername="0.0.0.0";
$username="almastrutt01";
$password="";
$database="ted500";
$dbport=3306;


//This line of code creates a connection
$conn = new mysqli($servername, $username, $password, $database, $dbport);


if(mysqli_connect_error()){
    die("Connection failed: " . mysqli_connect_error());


}




?>