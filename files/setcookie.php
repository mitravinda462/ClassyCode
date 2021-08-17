<html>
    <body>
<?php
//setcookie("name","john",)

function writeMessage(){
    $x="0.2";
    $y='10';
    $z=array(10,20,30,40);
    
    if($x){echo "You are really a nice person,Have a nice time!! ",$y[1],count($z),is_array($z);}
    else{
        echo"hi";
    };
    
}
writeMessage();
?>

</body>
</html>