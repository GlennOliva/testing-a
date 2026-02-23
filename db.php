<?php
$host = "bqsvzuaahxb4lvpbaxby-mysql.services.clever-cloud.com";
$user = "ulcssrkgbepeqb5w";
$pass = "PgVH9XKredmtIMft1Cep";
$dbname = "bqsvzuaahxb4lvpbaxby";

$conn = mysqli_connect($host,$user ,$pass , $dbname);

//conditional statements whether to verify the sql connection
//and php


if(!$conn)
 {
    die("Database connection failed: ". mysql_connection_error());
    
 }


?>