<?php

	include ("connectdb.php") ;
	error_reporting(0);

	$id = $_GET['id'];
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$gender = $_GET['gender'];
	$wayuser= $_GET['User'];

?>




	
<!DOCTYPE html>


<html>
	<title> Harmony Music School </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="../CSS/update.css">
	
<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">Welcome to <br/>Harmony Music School </h2>
				
			</div>
			
			<div class="menu">
				</ul>
			</div>		
		</div>
		<div class="login">
			<h2>Information</h2>
				<form name="myform" autocomplete="off" action="" method="GET"  ; >
		
		<table>
			<tr>
				<td>Name</td>
				<td> :</td>
				<td>
				 <input type='text' value=" <?php echo "$name"?>"  name='name' >
				</td>
		
		
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td>
				<input type='text' value="<?php echo "$phone"?>"  name='phone'>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
				<div class="radio">
				<input type='radio' name='gender'   value='Male'
					<?php
						if($gender == "Male")
						{
							echo "checked";
						}
					?>
				> &nbsp;Male
					<input type='radio' name='gender'  value='Female'
					<?php
						if($gender == "Female")
						{
							echo "checked";
						}
					?>
				> &nbsp;Female
					<input type='radio' name='gender'   value='Others'
					<?php
						if($gender == "Others")
						{
							echo "checked";
						}
					?>	
				> &nbsp;Others
				</div>
				</td>
			</tr>
			
			<tr>
					<td>What Are You?</td>
					<td>:</td>
					<td>
				<select class='regway' id='selection' name='wayuser'  >
						
						
				<option value= "wayuser"
						<?php
						if($User == "Instructor")
						{
							echo "selected";
						}
						?>
					>Instructor</option>
				<option
						<?php
						if($User == "Student")
						{
							echo "selected";
						}
						?>	
				>Student</option>
				
					</td>
			</tr>
				<tr>
					<td><input class="btn" type="submit" value="Update" name="submit" ></td> 
				</tr>
			</table>
		</form>
		</div>
	</div>
</body>
</html>

<?php

if($_GET['submit'])
{
	$id = $_GET['id'];
	$name = $_GET['name'];
	$phone = $_GET['phone'];
	$gender = $_GET['gender'];
	$wayuser= $_GET['User'];

	$query = "UPDATE REGISTRATION SET id='$id',name='$name',phone='$phone',gender='$gender',User='$wayuser' WHERE id='$id'";

	$data = mysqli_query($conn,$query);

	if($data)
	{
		echo "<script>alert('Record Updated to Database')</script>";
		
	}
		else 
	{
		echo "Failed to Update Record";
	}
}

?>

