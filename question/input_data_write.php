<?php
$name = $_POST["name"];
$email = $_POST["email"];
$b_type = $_POST["b_type"];
$str = $name.",".$email.",".$b_type."\n";

$file = fopen("data/data.csv","a");
flock($file, LOCK_EX);
fwrite($file, $str);
flock($file, LOCK_UN);
fclose($file);
?>
