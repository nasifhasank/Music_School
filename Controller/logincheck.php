<?php
	
	if(isset($_POST['LogbtnClick']))
	{
		$username = $_POST["logname"];
		$pass = $_POST["logpassword"];
		
		session_start();
		$lname = $_POST['logname'];
		$_SESSION["logname"]=$lname;

				if($username =='admin' && $pass =='admin')
				{
					header("location: ../Model/admin.php");
				}
				else if($username =='sanjida' && $pass =='instructor')
				{
					header("location: ../Model/instructor.php");
				}
				else if($username =='fatin' && $pass =='student')
				{
					header("location: ../Model/student.php");
				}					
		else
		{
			echo "Invalid username or Password";
		}
		}

?>