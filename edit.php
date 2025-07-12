<?php

$_Server="localhost";
$_User="root";
$_Password="";
$_database="phonebook_db";

$p=$_GET['id1'];

$conn = mysqli_connect($_Server, $_User, $_Password, $_database);
   
?>

<html>
   <head>
      <body>
         <form action=""method="POST">
         <div class="main">
            <h2 class="font">UPDATE PAGE</h2>
            <h4 class='aa'> NAME:-</h4>
         <input type="text" name="t1" class="text">
         <h4 class='aa'> DESIGNATION:- </h4>
         <input type="text" name="t2" class="text">
         <h4 class='aa'>  PHONE NUMBER:- </h4>
        <p class="aa"><?php echo $p?></p>
        <h4 class='aa'>ADDRESS:-</h4>
         <input type="text" name="t3" class="text">
         <br>
         <input type="submit" name='submit' value="UPDATE"class="sub">
         </div>
         </form>
      </body>
   </head>
</html>

<style>
   body{
      background-color:rgb(29, 249, 172) ;
   }
   .main{
      border:1px solid black; 
      width: 500px;
      height: 500px;
      justify-content: center;
      margin-left:500px;
      margin-top:50px;
   }
   .text{
      width: 400px;
      height: 30px;
      margin-left:50px;
      margin-top:1px;
   }
   .aa{
      margin-left:20px;
   }
   
   .sub{
      margin-top:30px;
      margin-left:220px;
      width: 100px;height: 40px;
      border-radius: 50px; border:none;
   }
   .font{
      margin-left:150px;
   }
</style>



<?php 


if(isset($_POST['submit']))
{
   $name=$_POST['t1'];
   $design=$_POST['t2'];
   $addres=$_POST['t3'];
   $sql="UPDATE add_new SET user_name='$name',designation='$design',addresss='$addres' WHERE phoneno='$p'";
   $rs=mysqli_query($conn,$sql);
   if($rs)
   {
      echo "<script> alert('Successfully updated')</script>";
      echo"<script>window.location='view_all.php'</script>";
   }
   else 
   {
      echo"errorr";
   }
}


?>