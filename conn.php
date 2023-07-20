<?php
$host="localhost";
$user="root";
$pass="";
$db="anitadatabase";
$conn=mysqli_connect($host, $user, $pass, $db);
if(!$conn){echo "Unable to connect to database";}
?>