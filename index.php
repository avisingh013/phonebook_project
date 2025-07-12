<html>
    <head>
        <body>
            <form action="login_verfy.php" method="POST">
            <div class="login">
            
                
                <div class="main">
                    <h1 class="a">LOGIN PAGE</h1>
                   User name <input type="text"class="box" name="name1" placeholder="enter you user name"> <br>
                   Password<input type="text"class="box1" name="paswd1" placeholder="enter your password">
                   <input type="submit" value="Submit"class="sub">
                <hr>

                <a href="reg.php" class="link">Signup?</a> 
                <a href="#" class="link1">Forgot?</a>
                </div>
            </Div>
        </form>
        </body>
    </head>
</html>
<style>
    body{
        justify-content: center;
        display: flex;
        background-color:grey;
        
    }
    .main{
        width: 500px;
        height: 310px;
        border: 1px;
        padding: 3%;
        border-radius: 2vh;
        background-color:white;
        
        
       
        
    }
    .login{ 
       justify-content: center;
       display: flex;
       color: rgb(169, 141, 40);
       font-weight: bold;
      
    }
    .a{
        justify-content: center;
        display: flex;
        color: rgb(81, 81, 138);
    }
    .box{
        width: 350px;
        height: 40px;
    }
    .box1{
        width: 350px;
        height: 40px; 
        margin-left: 10px;
        margin-top: 10px;  
    }
    .sub{
        width: 140px;
        height: 40px;
        border-radius: 50px;
        border:none;
        background-color: rgb(118, 105, 171);
        margin-left: 180px;
        margin-top: 30px; 
        font-weight: bold;
        font-size: 18px;
    }

    .link
    {
        font-size:14px;
    }
    .link1
    {
        font-size:14px;
        float: right;    
    }
</style>