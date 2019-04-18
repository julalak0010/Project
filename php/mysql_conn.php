<?php
$host ="localhost";
$user = "root";
$password ="";
$dbname ="inmotion";

$mysqli = new mysqli($host,$user,$password) or die ("Could not Connect..");

//select database
$mysqli->select_db($dbname)or die ("Could not Connect Database..");

?>