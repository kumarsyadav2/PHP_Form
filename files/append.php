<?php
$myfile = fopen("newfile.txt","a") or die("unable to open file");
$txt1 = "\nWinner is here!\n";
fwrite($myfile,$txt1);
$myfile2 = fopen("newfile2.txt", "a") or die("Unable to open this file!");
fwrite($myfile2,$txt1);
fclose($myfile);
fclose($myfile2);
?>
