<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            padding:0px;
            margin:0px;
        }
        h1{
                                  font-size:30px;
                                  text-align:center;
                      color:red;
                              }
                              .email{
                                  margin-left:15px;
                              }
                      
                              .main{
                                  border:2px solid black;
                                  width:500px;
                                  font-size:25px;
                                  margin-left:499px;
                                  background-color:gray;
                      
                              }
                              input{
                                  font-size:22px;
                                  width:320px;
                                  margin:10px;
                              }
                            
                              button{
                                  font-size:20px;
                                  margin-left:220px;
                                  margin-bottom:10px;
                              }
                              #s{
                                  color:white;
                                  background-color:green;
                                  text-transform:uppercase;
                              }
                              .e{
                                  color:white;
                                  background-color:red;
                                  text-align:center;
                                  text-transform:uppercase;
                                  font-weight:bold;
                              } 
                              .login{
                                margin-left:125px;
                                width:114px;
                              }                    
    </style>
    <title>Sarkari Result Login</title>
</head>
<body>


    <h1>Sarkari Result Login</h1>
    <?php 
  
     if(isset($_GET['status']))
     {
        $status = $_GET['status'];
        if($status==1)
        {
            ?>
            <p id='s'>Your Account Successfully created, you can login now<p>
            <?php
        }else if($status==2){
            ?>
              <p class="e">Email or Password Wrong</p>
            <?php
        }
     }
    ?>
    
    <div class="main">
<form action="process.php">
    <label for="email">Email-ID :</label>
    <input class="email" type="email" name="email" placeholder="Please Enter Your Email"/>
    <br>
  
<label for="password">Password :</label>
    <input class="psw" type="password" name="psw" placeholder="Please Enter Your Password"/>
<br>
<input class="login" type="submit" value="Login" name="login"/>
<div>Don't have a account <a href="sign_up.php">Sign-UP</a></div>
    

</form>

    </div>
</body>
</html>