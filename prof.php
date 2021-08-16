<?php
session_start();
// header('location:login.php');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'userregistration');
?>
<?php
if(isset($_POST['wsubmit']))
{//session_start();
  $username=$_SESSION['username'];
  $wwaist=$_POST['wwaist'];
  $wheight=$_POST['wheight'];
  $wshould=$_POST['wshould'];
  $wbust=$_POST['wbust'];
  $whip=$_POST['whip'];
  $warm=$_POST['warm'];
$size="insert into sizetable(wwaist,wheight,wshould,wbust,whip,warm,username) 
values ('$wwaist','$wheight','$wshould','$wbust','$whip','$warm','$username')";    
mysqli_query($con,$size);
}
else if(isset($_POST["msubmit"]))
{
  $mwaist=$_POST['mwaist'];
  $mheight=$_POST['mheight'];
  $mshould=$_POST['mshould'];
  $mchest=$_POST['mchest'];
  $mtorso=$_POST['mtorso'];
  $marm=$_POST['marm'];
  $msize="insert into msize(mwaist,mheight,mshould,mchest,mtorso,marm,username) values ('$username','$mwaist','$mheight','$mshould','$mchest','$mtorso','$marm','$username')";     
  mysqli_query($con,$msize);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>il Modella</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="logoim2.jpg" id="titlelogo" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Catamaran|Righteous&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
<!--html files-->
<link href="devika/login.html">
<style>
/* Icon 1 */

 .animated-icon2 {
width: 30px;
height: 20px;
position: relative;
margin: 0px;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .5s ease-in-out;
-moz-transition: .5s ease-in-out;
-o-transition: .5s ease-in-out;
transition: .5s ease-in-out;
cursor: pointer;
}

.animated-icon2 span{
display: block;
position: absolute;
height: 3px;
width: 100%;
border-radius: 9px;
opacity: 1;
left: 0;
-webkit-transform: rotate(0deg);
-moz-transform: rotate(0deg);
-o-transform: rotate(0deg);
transform: rotate(0deg);
-webkit-transition: .25s ease-in-out;
-moz-transition: .25s ease-in-out;
-o-transition: .25s ease-in-out;
transition: .25s ease-in-out;
}



.animated-icon2 span {
background: #e3f2fd;
}





/* Icon 3*/

.animated-icon2 span:nth-child(1) {
top: 0px;
}

.animated-icon2 span:nth-child(2), .animated-icon2 span:nth-child(3) {
top: 10px;
}

.animated-icon2 span:nth-child(4) {
top: 20px;
}

.animated-icon2.open span:nth-child(1) {
top: 11px;
width: 0%;
left: 50%;
}

.animated-icon2.open span:nth-child(2) {
-webkit-transform: rotate(45deg);
-moz-transform: rotate(45deg);
-o-transform: rotate(45deg);
transform: rotate(45deg);
}

.animated-icon2.open span:nth-child(3) {
-webkit-transform: rotate(-45deg);
-moz-transform: rotate(-45deg);
-o-transform: rotate(-45deg);
transform: rotate(-45deg);
}

.animated-icon2.open span:nth-child(4) {
top: 11px;
width: 0%;
left: 50%;
}

body
{
  background-image: url("background.jpg");
}
#gender
{
  position:absolute;
  padding:10px;
  padding-bottom: 10px;
  top:55%;
  left:35%;
  height:125px;
  width:400px;
  font-size:30px;
  font-family: 'Open Sans', sans-serif;
  text-align:center;
  border:2px solid pink;
  border-radius:40px;


}
#build
{
  position:absolute;
  
  top:25%;
  left:38%;
  
  font-size:50px;
  font-family: 'Open Sans', sans-serif;
  text-align:center;
  font-weight: 500;
  color:rgb(253, 72, 103);
  
}
#heading
{
  position:absolute;
  left:15%;
}
#female
{
  position:absolute;
  display:none;
  padding:10px;
  padding-bottom: 10px;
  left:25%;
  top:40%;
  background-color:rgb(253, 72, 103);
  height:300px;
  width:800px;
  font-size:26px;
  font-family: 'Open Sans', sans-serif;
  text-align:center;
  border:2px solid pink;
  border-radius:20px;


}
#male
{
  position:absolute;
  display:none;
  padding:10px;
  padding-bottom: 10px;
  left:25%;
  top:40%;
  background-color:rgb(253, 72, 103);
  height:300px;
  width:800px;
  font-size:26px;
  font-family: 'Open Sans', sans-serif;
  text-align:center;
  border:2px solid pink;
  border-radius:20px;


}
#right
{
  position:absolute;
  top:40%;
  left:10%;
  
}
#left
{
  position:Absolute;
  right:20%;
  top:40%;
}
#t1
{
  font-size:12.5px;
  position:absolute;
  left:110%;
  top:6%;
  width:40px;
   height:25px;
  }
  #t4
{
  font-size:12.5px;
  position:absolute;
  left:110%;
  top:6%;
  width:40px;
   height:25px;
  }
  #t7
{
  font-size:12.5px;
  position:absolute;
  left:110%;
  top:6%;
  width:40px;
   height:25px;
  }
  #t10
{
  font-size:12.5px;
  position:absolute;
  left:110%;
  top:6%;
  width:40px;
   height:25px;
  }
  #t2
{
  font-size:12.5px;
  position:absolute;
  left:110%;
  top:37%;
  width:40px;
   height:25px;
  }
  #t5
  {
    font-size:12.5px;
  position:absolute;
  left:110%;
  top:37%;
  width:40px;
   height:25px;
  
  }
  #t8
  {
    font-size:12.5px;
  position:absolute;
  left:110%;
  top:37%;
  width:40px;
   height:25px;
  
  }
  #t11
  {
    font-size:12.5px;
  position:absolute;
  left:110%;
  top:37%;
  width:40px;
   height:25px;
  
  }
#t3
{
  position:absolute;font-size:12.5px;
  left:110%;
  top:70%;
  width:40px;
   height:25px;
  }
  #t6
{
  position:absolute;
  left:110%;font-size:12.5px;
  top:70%;
  width:40px;
   height:25px;
  }
  #t9
{
  position:absolute;
  left:110%;font-size:12.5px;
  top:70%;
  width:40px;
   height:25px;
  }
  #t12
{
  position:absolute;
  left:110%;font-size:12.5px;
  top:70%;
  width:40px;
   height:25px;
  }
#submit
{
  position:absolute;
  top:90%;
  left:45%;
  background-color: rgb(253, 72, 103);
  color:white;
  font-size:30px;
}
</style>
</head>

<body style="color:white">

  <!--==========================
          Header
        ============================-->
        <header id="header"  style="background-color:black;">
                <div class="container-fluid">
            
                  <div id="logo">
                    <h2 style="color:white;">
                      <img src="logoim2.jpg" id="imicon" width ="40px" height ="40px" style="border-radius:23px;"/>
                      <a href="#intro" >il Modella</a>
                    </h2>
                
                  </div>
            
                  <nav id="nav-menu-container" >
                    <ul class="nav-menu">
                        
                      
                      <li class="menu-active"><a href="homepg.html">Home</a></li>
                      <li><a href="#">Trial Room</a></li>
                      <li >
                        <a href="#" >Wish List</a></li>
                      <li><a  href="cart.html" >Cart </a></li>
                    
                      
                      <li><a href="#contact">Profile</a></li>
                      
                    </ul>
                  </nav><!-- #nav-menu-container -->
                </div>
              </header><!-- #header -->
              <div style="background-color:rgb(196, 193, 193);height:100px;width:100%;padding-left:0;padding-right:0;"></div>
                 <!--Navbar-->
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <div id="build">
                Build Your Profile
              </div>
              <div style="background-color:rgb(253, 72, 103);;"id="gender">
                
                  Select gender
                  <br>
                  <input type="radio" onclick="malediv()" name="gen" class="gen" >Male
                  
                  <input type="radio" onclick="femalediv()" name="gen" class="gen" >Female
              
                  
              </div>
              <form><div id="female">
                  <br>
                  <h2 id="heading">Measurement Chart for Women (inches)</h2>
                  <br>
                  <br>
                  <!-- wwaist,wheight,wshould,wbust,whip,warm,username -->
                  <div id="right">
                  <h2>Waist</h2><input type="number" name="wwaist" id="t1" required><br>
                  Height<input type="number" id="t2" name="wheight" required><br>
                  Shoulders<input type="number" id="t3" name="wshould" required><br>
              </div>
  
              <div id="left">
                Bust<input type="number" id="t4" name="wbust" required><br>
                Hips<input type="number" id="t5" name="whip" required><br>
                Arms<input type="number" id="t6" name="warm" required><br>
            </div>
            <input type="Submit" value="Submit" name="wsubmit" style="position:absolute; left:45%;bottom:10%">
                </div>
              

              </form>

              
                <form><div id="male">
                    <br>
                    <h2 id="heading">Measurement Chart for Men (inches)</h2>
                    <br>
                    <br>
                    
                    <div id="right">
                    Shoulders<input type="number" id="t7" required ><br>
                    Chest<input type="number" id="t8" required><br>
                    Waist<input type="number" id="t9" required><br>
                </div>
    
                <div id="left">
                  Height<input type="number" id="t10" required><br>
                  Arms<input type="number" id="t11" required><br>
                  Torso<input type="number" id="t12" required><br>
              </div>
              <input type="Submit" name="msubmit" value="Submit" style="position:absolute; left:45%;bottom:10%">
                  </div></form>
              

              <div id="submit" class="btn" onclick="sizes()"style="display:none">Calculate Measurement</div>
            
<script>
  var gender=0;
  function sizes()
  {
    
    
    
    if(gender==1)
    {
      var waist=parseFloat(document.getElementById("t1").value);
    var height=parseFloat(document.getElementById("t2").value);
    var shoulders=parseFloat(document.getElementById("t3").value);
    var bust=parseFloat(document.getElementById("t4").value);
    var hips=parseFloat(document.getElementById("t5").value);
    var arms=parseFloat(document.getElementById("t6").value);
      
    if((waist>=22 && waist<=30) && (height>=18 && height<=24) && (shoulders>=7 && shoulders<=8) && (bust>=30 && bust<=34) && (hips>=34 && hips<=39) && (arms>=15 && arms<=17))
    {
      window.alert("Recommended Size: IL MOD Small")
    }
    else if((waist>=30 && waist<=36) && (height>=24 && height<=30) && (shoulders>=8 && shoulders<=10) && (bust>=34 && bust<=37) && (hips>=39 && hips<=45) && (arms>=17 && arms<=19))
    {
      window.alert("Recommended Size: IL MOD Medium")
    }
    else if((waist>=36 && waist<=40) && (height>=30 && height<=34) && (shoulders>=10 && shoulders<=11) && (bust>=37 && bust<=44) && (hips>=45 && hips<=50) && (arms>=19 && arms<=20))
    {
      window.alert("Recommended Size: IL MOD Large")
    }
    
    else
    {
      window.alert("Proportions not found for women")

    }
    }
    else
    {
      var shoulder=parseFloat(document.getElementById("t7").value);
    var chest=parseFloat(document.getElementById("t8").value);
    var waist=parseFloat(document.getElementById("t9").value);
    var height=parseFloat(document.getElementById("t10").value);
    var arms=parseFloat(document.getElementById("t11").value);
    var torso=parseFloat(document.getElementById("t12").value);
  
    if((shoulder>=10 && shoulder<=12) && (chest>=24 && chest<=28) && (waist>=30 && waist<=34) && (height>=25 && height<=30) && (arms>=11 && arms<=13) && (torso>=15 && torso<=17))
    {
      window.alert("Recommended Size: IL MOD Small")
    }
    else if((shoulder>=12 && shoulder<=14) && (chest>=28 && chest<=34) && (waist>=34 && waist<=40) && (height>=30 && height<=34) && (arms>=13 && arms<=15) && (torso>=17 && torso<=19))
    {
      window.alert("Recommended Size: IL MOD Medium")
    }
    else if((shoulder>=14 && waist<=17) && (chest>=34 && chest<=40) && (waist>=40 && waist<=40) && (heigth>=34 && height<=44) && (arms>=15 && arms<=17) && (torso>=19 && torso<=20))
    {
      window.alert("Recommended Size: IL MOD Large")
    }
    
    else
    {
      window.alert("Proportions not found for men")

    }
  }

    
        
  }
  
function malediv()
{
  document.getElementById("gender").style.display="none";
  document.getElementById("female").style.display="none";
  document.getElementById("male").style.display="block";
  document.getElementById("submit").style.display="block";

}
function femalediv()
{
  gender+=1;
  document.getElementById("gender").style.display="none";
  document.getElementById("male").style.display="none";
  document.getElementById("female").style.display="block";
  document.getElementById("submit").style.display="block";
}
</script>

              



      
     
      
              
             
</body>
</html>