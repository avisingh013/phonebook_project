<?php

$_Server="localhost";
$_User="root";
$_Password="";
$_database="phonebook_db";
$p=$_GET['id'];
$conn = mysqli_connect($_Server, $_User, $_Password, $_database);
$p="DELETE from add_new where phoneno='$p'";
$rs=mysqli_query($conn,$p);
if($rs)
{
   echo"<script>window.location='view_all.php'</script>";
} 
 else{
    echo"Error";
 }   