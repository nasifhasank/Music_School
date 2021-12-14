
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<style type="text/css">	
	*{
		margin:5px;
		padding:3px;
		background-color: rgb(163, 247, 255); 
	}
	</style>

<?php
	$jsondata=file_get_contents("../Model/instructorAdmin.json");
	$data=json_decode($jsondata,true);
	echo '<h3 style="font-size:160%;text-align:center;">All Users information</h3>';
	$message="<table border='2' width=100% ><tr><th>Name</th><th>Phone</th><th>User</th></tr>";
	foreach($data['info'] as $b)
	{
		//$message.="Name of the user is ".$b['name']."<br/>";
		//$message.="Phhone number of the ".$b['phone']."<br/>";
		//$message.="User is ".$b['user']." in our School <br/> <br/>";
		$message.="<tr><td style='text-align:center;' > {$b['name']} 
		</td><td style='text-align:center;'>{$b['phone']}</td><td style='text-align:center;'>{$b['user']}</td></tr>";
				
	}
	$message.="</table>";
	echo $message;
?>

</body>
</html>