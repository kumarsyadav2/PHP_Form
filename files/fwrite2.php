<?php
$myfile = fopen("newfile2.txt","w") or die("Unable to open file");
$txt = "\nDonald Duck\n";
fwrite($myfile,$txt);
$txt = "\nGrapes Fruit\n";
fwrite($myfile,$txt);
fclose($myfile);
?>
