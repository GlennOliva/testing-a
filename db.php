<?php
$host = "bmfcqp7assyfkhxmanr8-mysql.services.clever-cloud.com";
$user = "uuwozxwb7ewx4dw8";
$pass = "byF0JVtpuCZIv8nS721j";
$dbname = "bmfcqp7assyfkhxmanr8";

$conn = mysqli_connect($host,$user ,$pass , $dbname);

//conditional statements whether to verify the sql connection
//and php


if(!$conn)
 {
    die("Database connection failed: ". mysql_connection_error());
    
 }


?>