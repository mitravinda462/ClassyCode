<!DOCTYPE html>
<html lang="en">
<head>
    <title> Array </title>
</head>
<body>

<?php
// Define array
$colors = array("Red", "Green", "Blue", "Yellow");
 
// Sorting and printing array
sort($colors);
print_r($colors);

// Sorting and printing array
rsort($colors);
print_r($colors);


// Define array
$age = array("Peter"=>20, "Harry"=>14, "John"=>45, "Clark"=>35);

// Sorting array by value and print
asort($age);
print_r($age);

// Sorting array by value and print
arsort($age);
print_r($age);

// Sorting array by key and print
ksort($age);
print_r($age);



?>


</body>
</html>                                		