<?php
 
$localhost 	= "localhost";
$username 	= "root";
$password 	= "";
$dbname 	= "harshilDb";
 
$con = new mysqli($localhost, $username, $password, $dbname);

if (!$con) {
    die("connection failed : " .mysqli_error());
}
 
/* end of file */
