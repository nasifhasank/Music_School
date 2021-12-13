		
<!DOCTYPE html>
<html>
	<title> Harmony Music School </title>
	<style type="text/css">	
	*{
		margin:0;
		padding:0;


	}
	
	.main{
		width:100%;
		background-image: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url(../Images/bg.jpg);
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: 100% 100%;
		backgroud-position: center;
		
		height:109vh;
	}
	
	.navbar{
		width: 1200px;
		height: 75px;
		margin: auto;
	}
	
	.icon{
		width:300px;
		float:left;
		height: 70px;
	}
	
	.logo{
		color: red;
		font-size:20px;
		font-family:Arial;
		padding-left:20px;
		float:left;
		padding-top: 10px;
		cursor: default;
	}
	
	.menu{
		width: 400px;
		float:left;
		height: 70px;
	}
	
	.menu ul{
		float:left;
		display: flex;
		justify-contant:center;
		align-items: center;
	}
	
	.menu ul li{
		list-style: none;
		margin-left:62px;
		margin-top:27px;
		font-size:14px;
	}
	.menu ul li a{
		text-decoration:none;
		color: white;
		font-family: Arial;
		font-weight: bold;
		
		
	}
	
	ul li a:hover{
		color: red;
	}
	.instructorwc{
		margin: 8px;
		color: red;
		padding-left:30px;
		cursor: default;
		 font-family: "Lucida Console", "Courier New", monospace;
	}
	
	.instructorwc span{
		font-family: Arial;
		color:yellow;
		font-weight: bold;
		font-size: 35px;
	}
	.instructorwc .par{
		font-family: arial;
		color: red;
	}

	.btnInstructor{
		background: none;
		border= none;
		margin-top: 150px;
		margin-left: 150px;
		word-spacing: 50px
		
	}
	.btnInstructor .instructorbtn1{
		
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnInstructor .instructorbtn1 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnInstructor .instructorbtn2{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnInstructor .instructorbtn2 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnInstructor .instructorbtn3{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnInstructor .instructorbtn3 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnInstructor .instructorbtn4{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnInstructor .instructorbtn4 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}

	.instructorbtn1:hover{
		background: yellow;
		color: black;
	}
	.instructorbtn2:hover{
		background: yellow;
		color: black;
	}
	.instructorbtn3:hover{
		background: yellow;
		color: black;
	}
	.instructorbtn4:hover{
		background: yellow;
		color: black;
	}

	.roleInstructor{
		
		font-family=sans-sherif;
		text-align: center;
		color:red;
		font-size: 22px;
		background-color:white;
		margin: 2px;
		
		
	}

	</style>
	
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
		<div class="instructorwc">
				<h2> Welcome <span>
			
				<?php 
					
					session_start();
					 if(isset($_SESSION["logname"]))
					{
						echo $_SESSION["logname"];
					}
				?> </span></h2>
		</div>
		
		<div class="roleInstructor">
					<h2>
					What you want to play?
				</h2>
				</div>

		<div class="btnInstructor">
		<!--
		<input class="adminbtn1" type="submit" value="Courses" name="AdminbtnClick1">
		-->
		<button class="instructorbtn1"><a href="../Controller/guitarInstructor.php">Guitar</a></button>	
		<!--
		<input class="adminbtn2" type="submit" value="Instructors" name="AdminbtnClick2">
		-->
		<button class="instructorbtn2"><a href="#">Keyboard</a></button>	
		<!--
		<input class="adminbtn3" type="submit" value="Students" name="AdminbtnClick3">
		-->
		<button class="instructorbtn3"><a href="#">Bass</a></button>	

		<button class="instructorbtn4"><a href="#">Drums</a></button>	
		
	  </div>

	</div>
</body>
</html>