
<?php
//you need this piece of code to understand whats going on
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$servername= "localhost";
$username="root";
$password="";
$dbname="rdm";
//create connection

$conn = new mysqli($servername, $username, $password, $dbname);
//check connection
if(!$conn){
	echo 'connection failed: ' . mysqli_connect_error();
}
 //echo "connected successfully";


?>