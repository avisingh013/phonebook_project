




<html>
    <head>
        <title>Add  page</title>
    </head>
    <body>

    
    <div class="main">
     <h2>Welcome To </h2> 
    </div>
     <div class="main1">
     <h1>Phonebook Project</h1>
    </div>
        
        
           <DIV class="MENU">
            <a href="dashboard.php"><button class="button">HOME</button></a>
            <a href="add.php"><button class="button">ADD NEW </button></a>
            <a href="view_all.php"><button class="button">VIEW ALL</button></a>
            <a href="profile.php"><button class="button">PROFILE</button></a>
            <a href="contact.php"><button class="button">CONTACT US</button></a>
           </DIV>
           <div class="mmm">
           <table border='1'>
           <tr class="nn" >
            <th>NAME</th>
            <th>DESIGNATION</th>
            <th>PHONE NUMBER</th>
            <th>ADDRESS</th>
            <th>Update button</th>
            <th>Delete button</th>
           </tr>


           <?php
$servername = "localhost";
$username = "root";
$password = "";
 $db="phonebook_db";


$conn = new mysqli($servername, $username, $password , $db);



 $sql="SELECT user_name,designation,phoneno,addresss FROM add_new ";

$rs=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($rs))
{

?>
<br> <br>
            <form action="add_verfy.php" method='GET'>
            <tr class="center">
               <td> <?php echo $row['user_name']; ?></td>
            <td> <?php echo $row['designation']; ?> </td>
            <td> <?php echo $row['phoneno']; ?> </td>
            <td> <?php echo $row['addresss']; ?> </td>
            <td> <a href="edit.php?id1=<?php echo $row['phoneno'];?>"> Edit </a> </td>
            <td> <a href="delete.php?id=<?php echo $row['phoneno'];?>">Delete </a> <?php } ?></td>
            
           
            </div>
            </tr>  
        </div>

           </form>
           </table>
<style> 
    body{

        background-color: rgb(96, 179, 150);
    
        
    }
    .border{
        border: 1px solid black;
        width: 440px;
        height: 400px;
        justify-content: center;
        margin-left: 530px;
        margin-top: 40px;
        font-weight: bold;
        font-size: 16px;
       

    }

    .mmm{
        margin-left:430px;
    }
    .nn{
        color:white;
        align-item:center;
    }
    .aa{
        color: rgb(212, 93, 93);
        margin-left: 165px;
    }
    .button1{
        width: 100px;
        height: 35px;
        margin-left: 180px;
        margin-top: 20px;
        background-color: black;
        color: white;
        font-weight:bold;
        border-radius: 50px;
        border: none;

    }
    .box{
        width: 430px;
        height: 30px;
        margin-top: 15px;
        border-radius: 20px;
        margin-left: 5px;
        border: none;
    }
    .main{
        display: flex;
        justify-content: center;
        margin-top: 50px;
        color: rgb(220, 119, 119);
        font-weight: bold;
    }
    
    
    .main1{
        margin-top:-15px;
        color: rgb(220, 119, 119);
        font-weight: bold;
      margin-left: 10px;
      display: flex;
        justify-content: center;
    }
    
    .MENU{
        background-color:rgb(29, 249, 172) ;
        height: 40PX;
        margin-top: 1%;
        width: 600px;
        margin-left: 450px;
        border-radius: 100px;
        justify-content: center;
        display: flex;
    }
   
    .button{
        width: 100px;
        padding: 3px;
        height:30px;
        border: none;
        background-color: rgb(65, 208, 160);
        border-radius: 30px;
        margin-left: 10px;
       margin-top: 5px;
    }
   
</style>