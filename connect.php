<?php

// required variabe for connection
$servername ="localhost"; // by Default
$username ="root";        //username of xamp server
$password ="";
$database ="chatroom";
 
 //connectig to databas

$conn = mysqli_connect($servername,$username,$password,$database);

//check connection

if(!$conn)
{
	die("failed to connect".mysqli_connect_error());
}                                                                                   