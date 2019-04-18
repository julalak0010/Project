<?php
//รับค่ารหัสแผนกจากฟอร์ม
$fname =$_REQUEST['fname'];

require('mysql_conn.php');

//สร้างคำสั่ง sql
$query = "SELECT * FROM table_user WHERE fname = '$fname'";
// สั้งให้คำสั่ง sql ทำงาน
$result =$mysqli->query($query) or die ("Query Failed");

//ดึงข้อมูลมาใส่ในตัวแปล
$row = $result->fetch_array();
$fname =$row['fname'];
$lname =$row['lname'];
$gender =$row['gender'];
$username =$row['username'];
$password =$row['password'];
$address =$row['address'];
$date_t =$row['date_t'];
$email =$row['email'];
print"<html><head><title></title><meta charset=\"UTF-8\"></head><body>";
print"<table border=1>\n";
echo "<b>แก้ไขข้อมูลสมาชิก $fname</b>";

//สร้าง ฟอร์มสำหรับข้อมูลใหม่
echo "<form action =\"oo_upd_persontype.php\" methos=\"post\">";
echo "ชื่อ : <input type=\"text\" name=\"fname\" value=\"$fname\">";
echo "นามสกุล : <input type=\"text\" name=\"lname\" value=\"$lname\">";
echo "เพศ : <input type=\"text\" name=\"gender\" value=\"$gender\">";
echo "ที่อยู่ : <input type=\"text\" name=\"address\" value=\"$address\">";
echo "E-mail : <input type=\"text\" name=\"email\" value=\"$email\">";
echo "<br><input type=\"submit\" name=\"update\" value=\"Update\">";
echo "</form>";

$result->free();
$mysqli->close();
?>