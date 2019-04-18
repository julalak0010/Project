<?php
require('mysql_conn.php');

$fname = $_REQUEST['fname'];

$sql = "DELETE from table_user WHERE fname ='$fname'";

//excute sql
if($mysqli->query($sql)){
	echo "Record deleted!";
}else{
	echo "Error :",mysql_error();
}
$mysqli->close();
?>