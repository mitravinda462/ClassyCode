
<?php

$url='home.php';
session_start();
// header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
if(isset($_POST["login_submit"])) 
{
   // session_start();
$username =$_POST['username'];
$password=$_POST['password'];

$password = md5($password);
$sql = "SELECT * FROM usertable WHERE username='$username' AND password='$password' ";
$result = mysqli_query($con,$sql);
if(empty($username) || empty($password))
{
    $_SESSION['message'] = "Please fill out the required fields";
}
else if(mysqli_num_rows($result) == 1){
   $_SESSION['username'] =$username;
     //$_SESSION['message'] = $username;
    header("location:$url");
}
 
else{
    $_SESSION['message'] = "Username/Password combination incorrect";
}
}// first if closed

?>

<html>
<style>
    body{
        background-color:black;
    }
  
  #pwd,#uid{
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}
.btn{
    position: absolute; 
   
    font-size:20px; 
    width: 80%; height: 40px;
    border-radius:25px;
    color: white;
    background-color:pink;
}
#error_msge{
                        width:200px;
                        height:60px;
                        border :1px solid #FF0000;
                        background: #FFB9B8;
                        color:#FF0000;
                        text-align:center;
                        
                }
    </style>

<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<div id="loginbox" style="border: 3px solid rgb(247, 170, 182); border-radius: 5%; position:absolute;right:37%;top:15%;background-color:white;width:30%;height:90%">
   

    <img src="../logoim2.jpg" style="position: absolute; right:41%; top: 3%; width: 70px; height:70px ;border-radius:35px;">
    <p style="font-size: 30px; position: absolute;color:rgb(247, 170, 182);font-family: sans-serif;top: 15%; left:38%;">Login</p>
    <!-- <img src="closebutton.png" style="position: relative; left:92%; top:2%;width:6%; height: 6%"> -->
    
    <!-- form start -->
    <br/><br/><br/><br/>
    <?php 
if(isset($_SESSION['message'])){
    echo "<div id='error_msge'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
     }
    ?> 
    <form method="POST" action="login.php">
    
    <input type="text" id="uid" name="username" placeholder="Username*" style="position: absolute; left: 14%; top: 35%;width: 70%; height:8%; ">
    <input id="pwd" type="password" name="password"  placeholder="Password*" style="position: absolute; left: 14%; top: 49%;width: 70%; height:8%">
    <p style="position:relative;margin-top:59%;margin-left:20%;">* required field</P><br/>
    <button type="submit" name="login_submit" value="login" style=" left: 9%; top:66%;" class="btn" >
        Log In</button><br/>


   <!-- <input type="checkbox" style="position: absolute; left: 10%; top: 78%;"/> -->
   <!-- <text style="position: absolute; left:15%;top:78%;color: gray; font-family: 'Open Sans', sans-serif; font-size: 15px;"> -->
    <!-- Remember me</text> -->
    <p><!--a href="www.gmail.com"  style="position: absolute; left: 54%; top: 77%;">Forgot Password?</a--></p>
    <br/>
    <br/>
        <text style=" color: gray; font-family: 'Open Sans', sans-serif;  font-size: 18x; position: absolute; top:84%;left:23%">Don't have an account? </text>
        <button class="btn" style="bottom:2%;left:10%; "><a href="signup.php">Sign Up</a> 
        </button>
    
<!-- form end -->
    </form>
</div>

</html>