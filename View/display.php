<html>
	<head>
	<title> Harmony Music School </title>
	<style type="text/css">	
	*{
		margin:5px;
		padding:0px;
		background-color: rgb(163, 247, 255); 
	}
	</style>
	</head>
<body>

	<table border='2' width=100% >
	<tr>
	<th style='text-align:center;'>Id</th>
	<th style='text-align:center;'>Name</th>

	<th style='text-align:center;'>Phone</th>
	<th style='text-align:center;'>Gender</th>
	<th style='text-align:center;'>User</th>
	<th colspan="2" align= "center">Operations</th>

</tr>




<?php
	$conn = new mysqli('localhost','root','','harmony_music_school');
	error_reporting(0);
	$query = "select * from registration";

	$data = mysqli_query ($conn, $query) ;
	$total = mysqli_num_rows($data) ;


	if ($total!=0)
	{
		
		while($result=mysqli_fetch_assoc($data))
		{
			echo "
			<tr >
			<td style='text-align:center;'>".$result['id']."</td>
			<td style='text-align:center;'>".$result['name']."</td>
			<td style='text-align:center;'>".$result['phone']."</td>
			<td style='text-align:center;' >".$result['gender']."</td>
			<td style='text-align:center;'>".$result['User']."</td>
			<td  style='text-align:center;'><a href='../Controller/update.php?
			id=$result[id]&name=$result[name]&phone=$result[phone]&gender=$result[gender]&User=$result[User]'>
			<input style='background:green ;font-size: 19px;'type='submit' value='Edit/Update' id='editbtn'></td>
			
			
			<td  style='text-align:center;'><a href='../Controller/delete.php?id=$result[id]' onclick='return checkdelete()'><input style='background:red ;font-size: 19px;'type='submit' value='Delete' id='deleteBtn'></td>
			
			</tr>
			";
		}
	}
	else
	{
		echo "No records found";
	}

	?>
	</table>
	<script>
		function checkdelete()
		{
			return Confirm('Are You Sure You Wanna Delete?');
		}
</script>

</body>
</html>