<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="phonebook_db";


$conn = new mysqli($servername, $username, $password , $db);



$oldpss=$_GET['old_pss'];
$newpss=$_GET['new_pss'];
$cpss=$_GET['cnew_pss'];

$sql1="SELECT passwordd from login_db";
$rs=mysqli_query($conn,$sql1);
if($row=mysqli_fetch_array($rs))
{
   $passwd=$row['passwordd'];
   if($oldpss==$passwd)
   {
    $sql="UPDATE `login_db` SET `passwordd`='$cpss' WHERE login_id='avi123'";


if($conn->query($sql) === TRUE)
{
    echo "
    <script>
    alert('Successfully updated password')
    window.location='view_all.php'</script>
    ";
}
else
{
    echo" Not added something went wrong";
}

   }
   else
   {
    echo"Abe Old Password Sahi Se Enter Kar!";
   }
}
?>

