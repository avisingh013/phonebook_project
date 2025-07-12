<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="phonebook_db";


$conn = new mysqli($servername, $username, $password , $db);



$uname=$_GET['name1'];
$desig=$_GET['designation1'];
$no=$_GET['phoneno1'];
$addrs=$_GET['addresss1'];


 $sql="INSERT INTO add_new (`user_name`, `designation`, `phoneno`, `addresss`) VALUES ('$uname','$desig','$no','$addrs')";


if($conn->query($sql) === TRUE)
{
    echo "
    <script>
    alert('Record Added')
    window.location='add.php'</script>
    ";
}
else
{
    echo" Not added something went wrong";
}


?>

