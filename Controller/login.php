	
<!DOCTYPE html>


<html>
	<title> Harmony Music School </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="login.css">
	
	
	
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

					if(file_exists('indiuser.json'))
								{
					$jsondata=file_get_contents("indiuser.json");
				$data=json_decode($jsondata,true);
									$extra = array(
										'sname' => $_POST["sname"],
										'password' => $_POST["password"],
										'wayuser' =>$_POST["wayuser"],
									);
									$data[] = $extra;
									$final_data = json_encode($data);
									if(file_put_contents('indiuser.json',$final_data))
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
			
			
		
				<form name="myform"  action="connection.php" method="POST" onsubmit="return validate()" ; >

		
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
				echo "<input type='text' id='sname' name='sname' >";
				}
				?>
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
						echo "<input type='password' id='password' name='password'  >";
					}
				?>
				
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
						echo "<input type='password' id='cpassword' name='cpassword'  >";
					}
				?>
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
					echo "<input type='text' id='phone' name='phone' >";
				}
				?>
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
					</td>
			</tr>
				<tr>
					<td><input class="btn" type="submit" value="Submit" name="btnClick" ></td> 
				</tr>
			</table>

		</form>
			<script>
					const togglebtn =document.querySelector('submit');
					const divlist =document.querySelector('submit');

					toggleBtn.addEventListener('click',()=>{
						if(divlist.style.display ==='none')
						{
							divlist.style.display ='block';
						}
						else{
							divlist.style.display ='none';
						}
					}
					
					)

					function validate(){
						var username=document.getElementById("sname");
						var password=document.getElementById("password");
						var confirmpassword=document.getElementById("cpassword");
						var phonenumber=document.getElementById("phone");
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
						var selectuser=document.getElementById("selection");

						if(username.value.trim() =="")
						{
							alert("You must fill up your name!");
							return false;
						}
						else if(password.value.trim() =="")
						{
							alert("You must fill up your password!");
							return false;
						}
						else if(confirmpassword.value.trim() =="")
						{
							alert("You must fill up your confirm password!");
							return false;
						}
						else if(phonenumber.value.trim() =="" || phonenumber.value.length < 11)
						{
							
							alert("You must fill up your phone number with at least 11 digits!");	

							return false;		
						}			
						else if (!valid)
						{		
							alert("Select your gender!");

							return false; 
						}
						else if(selectuser.value.trim() =="select")
						{
							alert("You must select one user!");
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