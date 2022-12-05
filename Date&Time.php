<?php
echo "Today is: " . date("y-m-d") . "<br/>";
echo "Today is: " . date("y/m/d") . "<br/>";
echo "Today is: " . date("y.m.d") . "<br/>";
echo "Today is: " . date("l") . "<br/>";

echo "Time is: " . date("h:i:sa") . "<br/>";
date_default_timezone_set("Asia/Kolkata");
echo "Time is: " . date("h:i:sa") . "<br/>"; 
?>