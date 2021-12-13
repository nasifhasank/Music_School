<?php
	
	if(isset($_POST['btnClick']))
	{
		$way = $_POST["wayuser"];
		
		session_start();
		$rname = $_POST['sname'];
		$_SESSION["regname"]=$rname;
				
				if($way =='Instructor')
				{
						
					header("location: instructor.php");
					
				}
				else if($way =='Student')
				{
					header("location: student.php");
					
				}
				else if($way =='SO')
				{
					header("location: login.php");
					
				}
									
		else
		{
			echo "Invalid Choice";
		}
		}
		
		session_destroy();

?>