<?php

$host="db4free.net"; //hostname
$username="ittybitty02";//username
$password="~1q2w3e4r"; //database password
$db_name="ittybitty02";//database name

//connect to database
$con = mysqli_connect($host,$username,$password,$db_name) or die ("cannot connect to server");

if(!$con) {
	echo "connection error";
}
?> 