<?php
$url = "https://www.geeksforgeeks.org/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$result = curl_exec($ch);
echo $result;

echo "<br/><br/>";
?>