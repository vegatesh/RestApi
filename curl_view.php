<?php
$authtoken = "****";


function curl_get()
{
	$url = "https://creator.zoho.com/api/json/quotes-vengatesh/view/Sheet1_Report/authtoken=****&scope=creatorapi&aorborctechnologiescpt&raw=true";
	$ch=curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$response= curl_exec($ch);
	curl_close($ch);
	$creator_records = json_decode($response);
	echo ($response);
}
?>