<?php

session_start();
// header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
if(isset($_POST["signup_submit"])) {
   // session_start();
$username =$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];
if($password==$password2){
    $password=md5($password);//hashing password
$s = " select * from usertable where username= '$username'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['message']="The Username has already been taken!";
}
else{
    $reg=" insert into usertable(username,email,password,password2) values ('$username','$email','$password','$password2')";
    mysqli_query($con,$reg);
   // echo "Registration Successful!";
   $_SESSION['message']="Login to continue";
   $_SESSION['username']=$username;
   header('location:login.php');
   
}
}
else{
    $_SESSION['message']="The Two passwords do not match";
}
}// first if closed
?>