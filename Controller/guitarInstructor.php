<?php
	$jsondata=file_get_contents("guitarInstructor.json");
	$data=json_decode($jsondata,true);
	echo '<h3>Requested song by Student</h3>';
	$message="";
	foreach($data['guitarSong'] as $b)
	{
		$message.="The name of the student is ".$b['name']."<br/>";
		$message.="Want to learn ".$b['song']."<br/>";
	}
	echo $message;
?>