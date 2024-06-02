<?php

$servername="sql303.infinityfree.com";
$username="if0_36658551";
$password="OEAf6ciyLlxf,";
$database="if0_36658551_admin_details";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("Sorry we failed to connnect due to:".mysqli_connect_error());

}


?>