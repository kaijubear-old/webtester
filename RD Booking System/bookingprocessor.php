<?php 
include 'InfoReader.php';

$name = $_POST["name"]; 
$time = $_POST["time"];

$file = 'result.txt';
$file = fopen("result.txt", "w") or die("Unable to open file!");

foreach($colors as $value){
    file_put_contents($file, $value . "<br>", FILE_APPEND | LOCK_EX);
}
file_put_contents($name, FILE_APPEND | LOCK_EX);
file_put_contents($time, FILE_APPEND | LOCK_EX);

fclose($file);


?>