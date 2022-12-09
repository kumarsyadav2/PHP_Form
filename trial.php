<?php

// URL to fetch cookies
$url = "https://www.amazon.com/";

// Initialize cURL object
$curlObj = curl_init();

/* setting values to required cURL parameters.
CURLOPT_URL is used to set the URL to fetch
CURLOPT_RETURNTRANSFER is enabled curl
response to be saved in a variable
CURLOPT_HEADER enables curl to include
protocol header CURLOPT_SSL_VERIFYPEER
enables to fetch SSL encrypted HTTPS request.*/
curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_HEADER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curlObj);

// Matching the response to extract cookie value
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',
		$result, $match_found);

$cookies = array();
foreach($match_found[1] as $item) {
	parse_str($item, $cookie);
	$cookies = array_merge($cookies, $cookie);
}

// Printing cookie data
print_r( $cookies);

// Closing curl object instance
curl_close($curlObj);
?>
<?php
echo "<br/><br/>";
$url = "https://www.google.com/";
$curlObj = curl_init();

curl_setopt($curlObj, CURLOPT_URL, $url);
curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curlObj, CURLOPT_HEADER, 1);
curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($curlObj);
	
preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',
				$result, $match_found);
$cookies = array();

foreach($match_found[1] as $item) {
	parse_str($item, $cookie);
	$cookies = array_merge($cookies, $cookie);
}
	
print_r( $cookies);
echo "<br/><br/>";
var_dump($cookies);
curl_close($curlObj);
?>
