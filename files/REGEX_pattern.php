<?php
$pattern = "/cake+/";
$text = "He was eating cake in the cake.";
$x=preg_quote($pattern, $text);
if($x){
    echo "Match found!",$x;
} else{
    echo "Match not found.";
}
?>