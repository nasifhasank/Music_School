<?php
	$jsondata=file_get_contents("instructorAdmin.json");
	$data=json_decode($jsondata,true);
	echo '<h3>All instructors information</h3>';
	$message="";
	foreach($data['instructor'] as $b)
	{
		$message.="The name of the instructor is ".$b['name']."<br/>";
		$message.="The phone number of the instructor is ".$b['phone']."<br/>";
	}
	echo $message;
?>