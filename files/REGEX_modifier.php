<?php
$pattern = "/^color+/i"; 
//global case-insensitive search using the i
$text = "Color red  RED color reD is more visible than color";
$t="color color Color";
$p1="red";
$matches = preg_match_all($pattern, $t, $array);
echo $matches . " matches were found.";
print_r($array[0]);
?>

<?php
//to match at the beginning of 
//every line in a multi-line string using ^ anchor and m modifier 
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>