<?php

$servername="localhost";
$username="root";
$password="";
$dbname="registration";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Not connected".mysqli_connect_error());}

?>