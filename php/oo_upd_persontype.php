<?php
require('mysql_conn.php');


$fname = $_REQUEST['fname'];
$lname =$_REQUEST['lname'];
$gender =$_REQUEST['gender'];

$address =$_REQUEST['address'];

$email =$_REQUEST['email'];


$sql = "UPDATE table_user set fname='$fname' where lname='$lname'";

//excute sql
if($mysqli->query($sql)){
	echo "RECORD UPDATE";
}else{
	echo "ERROR :",mysql_error();
}

?>