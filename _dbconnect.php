<?php

$servername="localhost";
$username="root";
$password="";
$database="movieverse";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Sorry we failed to connnect due to:".mysqli_connect_error());

}



?>