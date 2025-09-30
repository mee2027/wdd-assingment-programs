<?php
$str = "PHP";
$arr = str_split($str);
while(!empty($arr)) echo array_pop($arr);
?>

