<?php
$info = "User Information.txt";
$myfile = fopen($info, "r") or die("Unable to open file!");
$fileinforaw = fread($myfile,filesize($info));
fclose($myfile);

$infoarray = $fileinforaw.preg_split("/n");

?> 