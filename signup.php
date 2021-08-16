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
if($num==1 && !($username=="" || $password=="" || $password2=="" ||$email=="")){
    $_SESSION['message']="The Username has already been taken!";
}
else if($username=="" || $password=="" || $password2=="" ||$email=="" ){
    $_SESSION['message']="Please fill out the required feilds";
}
else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    $_SESSION['message']="Enter a valid e-mail address";
}
// else if(!(isset($_POST['tc'])))
/*{
    $_SESSION['message']="Please Check the box";
}*/
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
    $_SESSION['message']="The two passwords do not match";
}
}// first if closed



?>


<html>
    <head>
            <link rel="stylesheet" type="text/css" href="signup.css">
            <style>
                #error_msg{
                        width:200px;
                        height:40px;
                        border :1px solid #FF0000;
                        background: #FFB9B8;
                        color:#FF0000;
                        text-align:center;
                        
                }
            </style>
    </head>
<body>
<div id="login-box">
        <img src="closebutton.png" style="position: relative; left:90%; bottom:50%;width:8%; height: 8%">    
        <div class="left">
                <img src="logoim2.jpg" style="position: relative; top:0%; left:82%;width: 80px; height:80px;border-radius:35px;">
                
                <br/>
                <br/>

<form method="POST" action="signup.php"> 
<?php 
if(isset($_SESSION['message'])){
    echo "<div id='error_msg'>".$_SESSION['message']."</div>";
    unset($_SESSION['message']);
}
?>
<br/>
    <input type="text" name="username" placeholder="Username*" />
          <input type="text" name="email" placeholder="E-mail*" />
          <input type="password" name="password" placeholder="Password*" />
          <input type="password" name="password2" placeholder="Confirm Password*" />
          <!-- <input type="checkbox"/> -->
        
          <!-- <span id="tnc" name="tc" value="tc">I have read and agree to the <a href="kwefjwekfb.com">terms and conditions</a></span> -->
          <p>* required field</P>
          <input type="submit" name="signup_submit"style="border-radius:25px;height:40px;font-size:15px;" value="Sign me up" />
          <h4>Have an account? <button class="btn" style="bottom:2%;left:10%;background-color:pink;border-radius:25px;width:100px;height:30px; ">
          <a style="color:white;font-size:15px;"href="login.php">Login</a> 
        </button></h4>
   
</form>
        </div>
        
        <div class="right">
        <h2 style="font-size: 40px; position: absolute;color:rgb(247, 170, 182);font-family: sans-serif;">Sign Up<br/>
    to be part of <br/>of il Modella !!</h2>
          <!--<span class="loginwith"><br />social network</span>
          
          <button class="social-signin facebook" style="border-radius:25px;">Log in with facebook</button>
          
          <button class="social-signin google" style="border-radius:25px;">Log in with Google+</button>
        </div>
        <div class="or">OR</div>-->
</div>
    </body>
      </html>