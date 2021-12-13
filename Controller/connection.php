<!DOCTYPE html>


<html>

<title> Harmony Music School </title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="connection.css">
	
	
	
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
			<h2>Your INFO</h2>
			
			
		
				<form name="myform" >

		
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
					
					}
					?>
					</td>
			</tr>
				<tr>
					
				</tr>
			</table>

		</form>
                </div>
            
                </body>
</html>		
	