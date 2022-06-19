<?php
$server = "localhost";
$username = "root";
$paasword = "";
$database = "usermvinfotech";

$conn = mysqli_connect($server, $username, $paasword ,$database);

if(!$conn)
{
    die("Error".$mysql_connet_error());
}

 
?>  