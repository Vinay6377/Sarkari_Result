<?php
include("connection.php");

if(isset($_GET['sign_up'])){
    $name = $_GET['name'];
    $mobileNo = $_GET['mobileNo'];
    $email = $_GET['email'];
    $password = $_GET['psw'];
    $cpassword= $_GET['cPsw'];

    if($password==$cpassword){
    $q = "INSERT INTO `account_details` (`name`,`mobile_no`,`email`,`password`) VALUES('$name',$mobileNo,'$email','$password')";
    $query = mysqli_query($conn,$q);
    if($query){
         header('Location:http://localhost/vinay/sarkari_result/login.php?status=1');
    }else{
        echo "Something wrong";
    }
}else{
    header('Location:http://localhost/vinay/sarkari_result/sign_up.php?status=2');
}
}


if(isset($_GET['login'])){
   $email= $_GET['email'];
   $psw = $_GET['psw'];

   $q = "SELECT * FROM `account_details` WHERE `email`='$email'";

   $query = mysqli_query($conn,$q);

   $data = mysqli_fetch_assoc($query);

 if($data['password']==$psw){
    header("Location:http://localhost/vinay/sarkari_result");
 }else{
    header("Location:http://localhost/vinay/sarkari_result/login.php?status=2");
 }

}
?>