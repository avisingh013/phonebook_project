<html>
    <head>
        <title>profile</title>
    </head>
    <body>
            <h1 class="phone">Phonebook</h1>
            <DIV class="MENU">
            <a href="dashboard.php"><button class="button">HOME</button></a> 
            <a href="add.php"><button class="button">ADD NEW </button></a>
            <a href="view_all.php"><button class="button">VIEW ALL</button></a>
            <a href="profile.php"><button class="button">PROFILE</button></a>
            <a href="contact.php"><button class="button">CONTACT US</button></a>
           </DIV>

           <form action="update_profile.php" method='GET'>
           <div class="border">
            <H2 class="aa">Change Password</H2>
            Old password<input type="text" name="old_pss" placeholder="Enter Old" class="box">
            New password <input type="text" name="new_pss" placeholder="Enter New Password" class="box">
            Conform New password<input type="text" name="cnew_pss" placeholder="Enter Conform Password" class="box">
            
            <input type="submit"value="CHANGE PASSWORD" class="button1">
           </div>
</form>
<style>
    body{

        background-color: rgb(96, 179, 150);
    
        
    }
    .border{
        border: 1px solid black;
        width: 440px;
        height: 350px;
        justify-content: center;
        margin-left: 530px;
        margin-top: 40px;
        font-weight: bold;
        font-size: 16px;
       

    }
    .button1{
        width: 170px;
        height:30px;
        border: none;
        background-color: rgb(65, 208, 160);
        border-radius: 30px;
        margin-left: 140px;
       margin-top: 30px;
       font-weight: bold;
       font-size: 14px;
       color: white;
    }
   
    .aa{
        color: rgb(212, 93, 93);
        margin-left: 120px;
    }
    .box{
        width: 430px;
        height: 30px;
        margin-top: 15px;
        border-radius: 20px;
        margin-left: 5px;
        border: none;}
    .phone{
        margin-top: 50px;
        display: flex;
        justify-content: center;
        color: burlywood;
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