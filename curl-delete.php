<?php

$authtoken="f4896d5f7d925f52ab9977e87463ba92";

curl_delete();

function curl_delete()
{

$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/trailvengatesh/form/Contact/record/delete";

$post_fields = array();
$post_fields['authtoken'] = "f4896d5f7d925f52ab9977e87463ba92";
$post_fields['scope'] = "creatorapi";
$post_fields['criteria'] = "(Emp_No == 1)";

$ch = curl_init($url);


curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_POST,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

$response = curl_exec($ch);
curl_close($ch);
echo $response;

}

?>
