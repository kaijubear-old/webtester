<?php 

echo "1";

$name = $_POST["name"]; 
$time = $_POST["time"];
echo "2";

$file = 'result.txt';
$file = fopen("result.txt", "w") or die("Unable to open file!");
echo "3";

foreach($colors as $value){
	echo "4";
}

echo "6";

fclose($file);

echo "15";
?>