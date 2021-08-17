<?php
echo strlen("Welcom to php ");
echo "<br>";
echo str_word_count("Hi How are you doing??");
echo "<br>";
echo strrev("Mitravinda");
echo "<br>";
echo strpos("Welcom to php ","php",1);
echo "<br>";
echo str_replace("php","php first program","Welcome to php ");
echo "<br>";
echo ucwords("welcom to php");
echo "<br>";
echo ucfirst("welcom to php ");
echo "<br>";
echo lcfirst("Welcom to php ");
echo "<br>";
echo str_repeat("Welcom to php\n",5);
echo "<br>";
echo strcmp("php","p");
echo "<br>";
echo substr("Welcom to php ",6);
echo "<br>";
echo substr("Welcom to php ",0,6);
echo "<br>";
$str="Wordpress"."<br>";
echo" using var dump";
var_dump($str);
echo" using printr";
print_r($str);
echo trim("$str","Wording");
echo " Hi\t$str!!<br>";
echo 'HI\t$str!!<br>';
$x ="hi";
$y = "guys";
echo "<h1>$x\t$y</h1>";
$a ="10";
$z=$a + 10;
echo "<h1>$z</h1>";
// $pattern = "/ca/[kf]e/";
// $text ="he was eating cake in cafe";
// $matches = preg_match_all($patern,$text,$array);
// echo $matches . "matches were found.";

// $pattern1 = "/^J/";
// $names =array("Jay","john","Jack");
// $matches = preg_grep($patern1,$names);
// foreach( $matches as $match){
// echo $match . "<br/>";}

// //replace
// $pattern2 = "/\s/";
// $replace= "-";
// $text1="hi hello \tworld \n ";
// echo preg_replace($pattern2,$replace,$text1);
// //match substrings
// // $pattern2 = "/[\s,]+/";

// // $text2="hi hello world \n ";
// // $parts = perg_split($pattern2,$text2);
//  //pattern matching in a word
//  $pattern3 = '/\bcar\w*/'; // * indicates that it searches for all occurences
// $replace3= "<b>$0</b>";
// $text3="cart car cartoon oscar scar carrot hello \tworld \n ";
// echo "<br/>";
// echo preg_replace($pattern3,$replace3,$text3);



?>