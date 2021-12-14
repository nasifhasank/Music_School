	
<!DOCTYPE html>


<html>
	<title> Harmony Music School </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="../CSS/login.css">
	
	
	
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
		<div class="userifPost">
			<?php
				$isPost=false;
				
					if(isset($_POST["btnClick"]))
					{	
						header("location: connection.php");

						$isPost=true;
						echo " <h2> USER ADDED SUCCESSFULLY  <a href='../index.php'> > HOME < </a> </h2> ";
						
						
						$name= $_POST["sname"];
						$password= $_POST["password"];
						$wayuser= $_POST["wayuser"];

					if(file_exists('../Model/indiuser.json'))
								{
					$jsondata=file_get_contents("../Model/indiuser.json");
				$data=json_decode($jsondata,true);
									$extra = array(
										'sname' => $_POST["sname"],
										'password' => $_POST["password"],
										'wayuser' =>$_POST["wayuser"],
									);
									$data[] = $extra;
									$final_data = json_encode($data);
									if(file_put_contents('../Model/indiuser.json',$final_data))
									{
										$messege=" <label class ='success'> Successfully Done</label>"; 
									}
						
								}
								else{
									$error = "JSON NOT EXISTS";
								}
						
						
					}
					else
					{
						$isPost=false;
					}
				
				
			?>
			
		</div>
		<div class="login">
			<h2>SIGN UP HERE</h2>
			
			
		
				<form name="myform" autocomplete="off" action="connection.php" method="POST" onsubmit="return validate()" ; >

		
		<table>
			<tr>
				<td>Name</td>
				<td> :</td>
				<td>
				<?php
				if($isPost)
				{
				echo "<h3>".$_POST["sname"]."</h3><br/>";
				}
				else 
				{					
				echo "<input type='text' id='sname' name='sname' placeholder='Example: Boss' >";
				}
				?>
				<br/><span id="snamee"></span>
				</td>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td>
				<?php
					if($isPost)
					{
						echo "<h3> ***** </h3><br/>";
					}
					else 
					{					
						echo "<input type='password' id='password' name='password' placeholder='Example: Boss@12345' >";
					}
				?>
				<br/><span id="passwordd"></span>
				</td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td>:</td>
				<td>
				<?php
				if($isPost)
					{
						echo "<h3> ***** </h3><br/>";
					}
					else 
					{					
						echo "<input type='password' id='cpassword' name='cpassword' placeholder='Example: Boss@12345' >";
					}
				?>
				<br/><span id="cpasswordd"></span>
				</td>
			</tr>
			<tr>
				<td>Phone Number</td>
				<td>:</td>
				<td>
				<?php
				if($isPost)
				{
				echo "<h3>".$_POST["phone"]."</h3><br/>";
				}
				else{
					echo "<input type='text' id='phone' name='phone' placeholder='Example: 01700000000'>";
				}
				?>
				<br/><span id="phonee"></span>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td>
				<div class="radio">
				<?php
				if($isPost)
				{
				echo "<h3>".$_POST["gender"]."</h3><br/>";
				}
				else{
					echo 
					"<input type='radio' name='gender'   value='Male'> &nbsp;Male
					<input type='radio' name='gender'  value='Female'> &nbsp;Female
					<input type='radio' name='gender'   value='Others'> &nbsp;Others";
				}
				?>
				<br/><span id="genderr"></span>
				</div>
				</td>
			</tr>
			
			<tr>
					<td>What Are You?</td>
					<td>:</td>
					<td>
					
					
				<?php
					if($isPost)
					{
						echo "<h3>".$_POST["wayuser"]."</h3><br/>";
					}
					else{
					echo 
					
						"<select class='regway' id='selection' name='wayuser'  >
						
						 <option value='select'>Select One</option>
						<option>Instructor</option>
						<option>Student</option>";
					}
					?>
					<br/><span id="selectionn"></span>
					</td>
			</tr>
			
				<tr>
					<td><input class="btn" type="submit" value="Submit" name="btnClick" ></td> 
				</tr>
				
			</table>

		</form>
			<script>
					function validate(){
						var username=document.getElementById("sname").value;
						var password=document.getElementById("password").value;
						var confirmpassword=document.getElementById("cpassword").value;
						var phonenumber=document.getElementById("phone").value;
						//gender
						var valid =false;
						var checkgender=document.myform.gender;

						for(var loop=0; loop<checkgender.length;loop++)
						{
							if(checkgender[loop].checked)
							{
								valid =true;
								break;
							}
						}
						var selectuser=document.getElementById("selection").value;

						if(username.trim() =="")
						{
							document.getElementById("snamee").innerHTML="**You must fill up your name**";
							return false;
						}
						if(username.length<3)
						{
							document.getElementById("snamee").innerHTML="**You must fill up with a suitable name**";
							return false;
						}
						else{
							document.getElementById("snamee").innerHTML="";
						}
						 if(password.trim() =="")
						{
							
							document.getElementById("passwordd").innerHTML="**You must give a password**";
							return false;
						}
						if(password.length<6)
						{
							document.getElementById("passwordd").innerHTML="**Password should be more than 6 characters**";
							return false;
						}
						else{
							document.getElementById("passwordd").innerHTML="";
						}
						 if(confirmpassword.trim() =="")
						{
							document.getElementById("cpasswordd").innerHTML="**You must confirm your password**";
							return false;
						}
						if(confirmpassword != password)
						{
							document.getElementById("cpasswordd").innerHTML="**Password not matched**";
							return false;
						}
						else{
							document.getElementById("cpasswordd").innerHTML="";
						}
						 if(phonenumber.trim() =="" || phonenumber.length < 11 || phonenumber.length > 11)
						{

							document.getElementById("phonee").innerHTML="**You must fill up your phone number with 11 digits!**";
							return false;		
						}	
						if(isNaN(phonenumber)) 
						{

							document.getElementById("phonee").innerHTML="**You must fill up your phone number with only numbers!**";
							return false;		
						}	
						else{
							document.getElementById("phonee").innerHTML="";
						}	
						 if (!valid)
						{		
							
							document.getElementById("genderr").innerHTML="**Select your gender";
							return false; 
						}
						else{
							document.getElementById("genderr").innerHTML="";
						}
						 if(selectuser.trim() =="select")
						{
							alert("YOU HAVE TO SELECT ONE USER MODE!");
							return false;
						}	
						else{
							return true;
						}
					}
			</script>
		</div>
	</div>
</body>
</html>