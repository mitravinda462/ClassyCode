<?php
$pattern = '/car\w*\b/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car : cart, carrot, cartoon. 
Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
?>