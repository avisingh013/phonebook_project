<?php

$_Server="localhost";
$_User="root";
$_Password="";
$_database="phonebook_db";
$p=$_post['name1'];
$p=$_post['paswd1'];
$conn = mysqli_connect($_Server, $_User, $_Password, $_database);
INSERT INTO `regi_table`(`name`, `mobile`, `address`, `password`) VALUES ('username','email','password','address');
$rs=mysqli_query($conn,$p);
if($rs)
{
   echo"<script>window.location='dashboard.php'</script>";
} 
 else{
    echo"Error";
 }   