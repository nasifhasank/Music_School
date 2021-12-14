<?php
	$jsondata=file_get_contents("../Model/guitarStudent.json");
	$data=json_decode($jsondata,true);
	echo '<h3>All free song by Instructors</h3>';
	$message="";
	foreach($data['guitarFree'] as $b)
	{
		$message.="The name of the instructor is ".$b['name']."<br/>";
		$message.="Free song he/she want to share ".$b['song']."<br/>";
	}
	echo $message;
?>