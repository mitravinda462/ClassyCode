<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
//find all matches within a string
$matches = preg_match_all($pattern, $text, $array);
echo $matches . " matches were found.";
?>