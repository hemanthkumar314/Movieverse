<?php

$servername="sql303.infinityfree.com";
$username="	if0_36658551";
$password="OEAf6ciyLlxf,";
$database="if0_36658551_movies";

$con=mysqli_connect($servername,$username,$password,$database);

if(!$con)
{
    die("Sorry we failed to connnect due to:".mysqli_connect_error());

}


?>