<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
$username =$_POST['username'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$email=$_POST['email'];

$s = " select * from usertable where username= '$username' && $password='$password'";
$result = mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1){
    header('location:home.php');
}
else{
    header('location:login.php');
}
?> 