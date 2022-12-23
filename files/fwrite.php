<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "\nSaurabh ";
fwrite($myfile, $txt);
$mid = "Kumar ";
fwrite($myfile, $mid);
$txt1 = "Yadav\n";
fwrite($myfile, $txt1);
fclose($myfile);
?>
