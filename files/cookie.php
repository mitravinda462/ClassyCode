<?php
// $email="ex@gmail.123456";
// $afterat= explode("@",$email)[1];
// $afterdot= explode(".",$afterat)[1];
// $beforedot= explode(".",$afterat)[0];
// //echo"$beforedot";
// if(($afterdot=="com" || $afterdot=="edu") && (ctype_alpha($beforedot))  ){
//     echo "ye!!";
// }
// else
// {
//     echo "no!";
// }
//$x=100;
echo $x."hi";
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is:</p>".$x;
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
echo ("hi");
?>