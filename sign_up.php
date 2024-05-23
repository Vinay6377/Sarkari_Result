<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        *{
            padding:0px;
            margin:0px;
            margin-left:20px;
        }
        h1{
            font-size:30px;
            text-align:center;
            color:aqua;
            background-color:red;
            width:602px;
            display:flex;
            justify-content:center;
            text-align:center;
            margin-left:380px
        }
      

        .main{
            border:2px solid black;
            width:600px;
            font-size:25px;
            margin-left:380px;
            background-color:grey;
            box-shadow: 2px 20px 30px 6px;

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

        .name{
            margin-left:135px;
        }
        .mobile{
            margin-left:93px;
        }
        .email{
            margin-left:103px;
        }
        .psw{
            margin-left:99px;
        }
        .e{
            color:white;
            background-color:red;
            text-align:center;
            text-transform:uppercase;
            font-weight:bold;
        }
        .submit {
        margin-left: 235px;
        width: 188px;
        }
        .a{
            margin-left:259px
        }
    </style>
    <title>Sarkari Result Sign Up</title>
</head>
<body>


    <h1>Create Your free account here</h1>
    <div class="main">
<form action="process.php" method="get">
    <label for="name">Name :</label>
    <input type="text" class="name" name="name" placeholder="Enter your full name"/>
    <br>
    <label for="phone">Mobile No:</label>
    <input type="number" class="mobile" name="mobileNo" placeholder="Enter your Number"/>
    <br>
    <label for="email">Email-ID :</label>
    <input class="email" type="email" name="email" placeholder="Please Enter Your Email"/>
    <br>
<label for="password">Password :</label>
    <input class="psw" type="password" name="psw" placeholder="Please Enter Your Password"/>
<br>
<label for="C_password">Confirm Password :</label>
    <input class="C_psw" type="password" name="cPsw" placeholder="Please Confirm Your Password"/>
    <br>
<input class="submit" type="submit" name="sign_up" value="Sign UP" />

    

</form>

<a class="a" href="login.php">Login</a>
<?php 
    
     if(isset($_GET['status']))
     {
        $status = $_GET['status'];
        if($status==2){
        ?>
          <p class="e">Please Match Your password</p>
        <?php
    }
}
?>
    </div>

</body>
</html>