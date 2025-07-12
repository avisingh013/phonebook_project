<html>
    <head>
        <title>Add page</title>
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
           <div class="border">
            <H2 class="aa">Add Users </H2>

            <form action="add_verfy.php" method='GET'>
            Name <input type="text" name='name1'placeholder="Enter you'r name" class="box">
            Designation <input type="text" name='designation1'placeholder="Enter you'r Designation" class="box">
            Phone <input type="text" name='phoneno1'placeholder="Enter you'r Phone number" class="box">
            Address <input type="text" name='addresss1'placeholder="Enter you'r Address" class="box">
            <input type="submit"value="Add Here" class="button1">
           </div>

           </form>
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