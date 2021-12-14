		
<!DOCTYPE html>

<html>
	<title> Harmony Music School </title>

		<link rel="stylesheet" href="../CSS/admin.css">
	
<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">Welcome to <br/>Harmony Music School </h2>
				
			</div>
			
			<div class="menu">
				<ul>
					<li><a href="../index.php">Home</a></li>
					<li><a href="../View/contact.php" target="_blank">Contact</a></li>
					<li><a href="../view/about.php" target="_blank">About</a></li>
					<li><a href="../view/services.php" target="_blank">Services</a></li>
				</ul>
			</div>	
		</div>
		<div class="adminwc">
				<h2> Welcome <span>
			
				<?php 
					
					session_start();
					 if(isset($_SESSION["logname"]))
					{
						echo $_SESSION["logname"];
					}
					else{
						echo "Please login again";
					}
				?> </span></h2>
		</div>
		<div class="roleAdmin">
					<h2>
					Choose one to View or Edit
				</h2>
			</div>
		<div class="btnAdmin">
		<!--
		<input class="adminbtn1" type="submit" value="Courses" name="AdminbtnClick1">
		-->
		<button onclick="load()" type="button" id="ajaxbtn" class="adminbtn1">COURSES</button>	
		<!--
		<input class="adminbtn2" type="submit" value="Instructors" name="AdminbtnClick2">
		-->
		<button class="adminbtn2"><a href="../Controller/indexread.php">VIEW</a></button>	
		<!--
		<input class="adminbtn3" type="submit" value="Students" name="AdminbtnClick3">
		-->
		<button class="adminbtn3"><a href="../View/display.php">UPDATE</a></button>	
		
	  </div>
	  <div class="ajaxinfo"  id="testt"  ></div>
	<script src= "adminajax.js"></script>
</body>
</html>