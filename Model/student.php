		
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
	.wc{
		margin: 8px;
		color: red;
		padding-left:30px;
		cursor: default;
		 font-family: "Lucida Console", "Courier New", monospace;
	}
	
	.wc span{
		font-family: Arial;
		color: yellow;
		font-weight: bold;
		font-size: 35px;
	}
	.wc .par{
		font-family: arial;
		color: red;
	}

	.btnStudent{
		background: none;
		border= none;
		margin-top: 150px;
		margin-left: 150px;
		word-spacing: 50px
		
	}
	.btnStudent .studentbtn1{
		
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnStudent .studentbtn1 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnStudent .studentbtn2{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnStudent .studentbtn2 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnStudent .studentbtn3{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnStudent .studentbtn3 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}
	.btnStudent .studentbtn4{
		background: red;
		font-size: 70px;
		border-radius: 10px;
		cursor: pointer;
	}
	.btnStudent .studentbtn4 a{
		
		text-decoration: none;
		color: black;	
		transition: .03s ease;
	}

	.studentbtn1:hover{
		background: yellow;
		color: black;
	}
	.studentbtn2:hover{
		background: yellow;
		color: black;
	}
	.studentbtn3:hover{
		background: yellow;
		color: black;
	}
	.studentbtn4:hover{
		background: yellow;
		color: black;
	}

	.roleStudent{
		
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
		
		<div class="wc">
				<h2> Welcome <span>
				<?php 
					session_start();
					
					 if(isset($_SESSION["logname"]))
					{
						echo $_SESSION["logname"];
					}
				?></span> </h2>
		</div>
		<div class="roleStudent">
					<h2>
					What you want to learn?
				</h2>
				</div>

		<div class="btnStudent">
		<!--
		<input class="adminbtn1" type="submit" value="Courses" name="AdminbtnClick1">
		-->
		<button class="studentbtn1"><a href="../Controller/guitarStudent.php">Guitar</a></button>	
		<!--
		<input class="adminbtn2" type="submit" value="Instructors" name="AdminbtnClick2">
		-->
		<button class="studentbtn2"><a href="#">Keyboard</a></button>	
		<!--
		<input class="adminbtn3" type="submit" value="Students" name="AdminbtnClick3">
		-->
		<button class="studentbtn3"><a href="#">Bass</a></button>	

		<button class="studentbtn4"><a href="#">Drums</a></button>	
		
	  </div>

	</div>
</body>
</html>