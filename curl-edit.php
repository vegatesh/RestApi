<?php
	$authtoken="f4896d5f7d925f52ab9977e87463ba92";

	curl_edit();

	function curl_edit()
	{
	
		$url = "https://creator.zoho.com/api/aorborctechnologiescpt/json/trailvengatesh/form/Contact/record/update";

		
		$post_fields = array();
		$post_fields['authtoken'] = "f4896d5f7d925f52ab9977e87463ba92";
		$post_fields['scope'] = "creatorapi";
		$post_fields['criteria'] = "Emp_No == 2";
		$post_fields['Emp_No'] ="5";

		$ch = curl_init($url);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch,CURLOPT_POST,true);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$post_fields);

		$response = curl_exec($ch);
		curl_close($ch);
		echo $response;

	}

	?>
