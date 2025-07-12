<html>
    <head>
        <title>CONTACT</title>
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
           <form action="contact_verify.php">
           <div class="head">
            <h2 class="aa">Send us a message </h2>
            <h4 class="aa">if  you have any work me or any types of phonebook<br> related to my tutorial, you can send me message from here it's my pleasure to help you </h4>
            <input type="text" placeholder="Enter your Name" class="text1"name='name'>
            <input type="text" placeholder="Enter your Email" class="text1" name='email'>
            <input type="text" placeholder="Enter your Message" class="text2" name='message'>
            <input type="submit" value="Send Now"class="sub">
           </div>
           </form>
           <style>
            body{
                background-color: rgb(96, 179, 150);
    
            }
            .head{
                border: 2px solid black;
               width: 500px;
               height: 500px;
               margin-left:500px;
               justify-content: center;
                margin-top:50px;
                background-size:500px 450px;
                color:white;
                font-weight: bold;
            }
            
            .aa{
               
                font-weight: bold;
                margin-left:20px;
                margin-top:40px;
            }
            .text1{
                width: 450px;
                height: 40PX;
                margin-left:25px;
                opacity:0.5px;
                border:none;
                border-radius: 50px;
                margin-top:10px;
            }
            .sub{
                margin-top:30px;
                margin-left:215px;
                width: 100px;
                height: 40PX;
                border:none;
                border-radius: 50px;
                background-color:green;
                color:white;
                font-weight: bold;
            }
            .text2{
                width: 450px;
                height: 100PX;
                margin-left:25px;
                opacity:0.5px;
                border:none;
                border-radius: 30px;
                margin-top:10px;
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
    .phone{
        margin-top: 50px;
        display: flex;
        justify-content: center;
        color: burlywood;
    }
   
           </style>