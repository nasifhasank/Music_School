<?php
	$jsondata=file_get_contents("indiuser.json");
	$data=json_decode($jsondata,true);
	//echo '<h3>All users information</h3>';
	$message="";
	foreach($data as $a)
	{
		$message.="The name of the user is ".$a['sname']."<br/>";
		$message.="The user is our ".$a['wayuser']."<br/>";
	}
	echo $message;
?>