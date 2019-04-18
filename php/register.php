<?php
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="inmotion";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$gender = $_POST["gender"];
$username = $_POST["username"];
$password = $_POST["password"];
$address = $_POST["address"];
$date_t = $_POST["date_t"];
$email = $_POST["email"];
$sql ="insert into table_user(fname,lname,gender,username,password,address,date_t
,email) values('$fname','$lname','$gender','$username','$password','$address','$date_t'
,'$email')";

if(mysqli_query($conn,$sql)){
    
  echo "<script>alert('สมัครสมาชิกสำเร็จ');</script>";
   ('location:ins_typeplace.php');
  //echo windows('login.html');



}

require('mysql_conn.php');

$query = "SELECT*FROM table_user order by fname ";

$result = $mysqli->query($query) or die ("Query Failed");

if($result->num_rows==0){
	echo "Nothing Display";
}
    print"<html><head><title></title><meta charset=\"UTF-8\"></head><body>";
    print"<table border=1>\n";
echo "<tr><th>ชื่อ</th><th>นามสกุล</th><th>เพศ</th><th>Username</th><th>Password</th><th>ที่อยู่</th><th>วันที่สมัคร</th><th>Email</th><th colspan='2'>เลือกทำงาน</th></tr>";
while($row = $result->fetch_array()){
    print "\t<tr>\n";
    
    echo "<td>",$row["fname"],"</td>\n";
	echo "<td>",$row["lname"],"</td>\n";
	echo "<td>",$row["gender"],"</td>\n";
	echo "<td>",$row["username"],"</td>\n";
	echo "<td>",$row["password"],"</td>\n";
	echo "<td>",$row["address"],"</td>\n";
	echo "<td>",$row["date_t"],"</td>\n";
	echo "<td>",$row["email"],"</td>\n";
	
    $fname = $row["fname"];
    echo "<td><a href=\"oo_disp_persontype.php?fname=$fname\">Edit</a></td>\n";
    echo "<td><a href=\"oo_del_persontype.php?fname=$fname\">Delete</a></td>\n";
    echo "\t</tr>\n";
	}

/*
foreach ($rowas as $col_value) {
    print "\t<td>$col_value</td>\n";
}*/

print "</table>\n";
echo "จำนวนข้อมูลทั้งหมด: ",mysqli_num_rows($result),"รายการ<br>";
print "</body></html>\n";

$result->free_result();
$mysqli->close();
?>