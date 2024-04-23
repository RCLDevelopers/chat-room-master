<?php
//creating the value of post parameter
$room = $_POST['room'];

if(strlen($room)>20 or strlen($room)<2)
{  
	$message="Please Enter Name Between 2 to 20 length";
	echo '<script language ="javascript">';
	echo 'alert( "'.$message.'");';
	echo 'window.location="http://localhost/chatroom";';
	echo '</script>';
}
else if(! ctype_alnum($room))
{
	$message ="Please Enter Alphanumeric";
	echo '<script language="javascript">';
	echo 'alert("'.$message.'");';
	echo 'window.location="http://localhost/chatroom";';
	echo '</script>';
}
else{
	//connecting to database

	include 'connect.php';
	echo "Lets Chat Now";
}
?>