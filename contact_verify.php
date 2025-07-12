<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="phonebook_db";


$conn = new mysqli($servername, $username, $password , $db);



$name=$_GET['name'];
$email=$_GET['email'];
$msg=$_GET['message']; 

$sql="INSERT INTO contact (`name1`, `email_id`, `message`) VALUES ('$name','$email','$msg')";

if($conn->query($sql) === TRUE)
{
    echo "
    <script>
    alert('Thanks For contact us!!')
    window.location='add.php'</script>
    ";
}
else
{
    echo"Please enter currect details";
}

?>

