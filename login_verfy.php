<?php
$name=$_POST['name1'];
$password=$_POST['paswd1'];
$conn=mysqli_connect('localhost','root','','phonebook_db',3306);
$sql="SELECT * FROM `login_db` WHERE name='$name' and passwordd='$password'";
$rs=mysqli_query($conn,$sql);
if(rs)
{
    echo"correct";

}
else{
    echo"check the username or password";
}
?>
