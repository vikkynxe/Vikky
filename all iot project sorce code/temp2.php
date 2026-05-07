<?php

$s =$_GET['a'];
echo $s ;
$logFile = 'text.txt';
file_put_contents($logFile,$s);

?>