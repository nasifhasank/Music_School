<?php 

	if(isset($_POST["submit"]))
		{
		$name= $_POST["sname"];
		$password= $_POST["password"];
		$wannabe= $_POST["wannabe"];

					if(file_exists('users.json'))
								{
					$jsondata=file_get_contents("users.json");
				$data=json_decode($jsondata,true);
									$extra = array(
										'sname' => $_POST["sname"],
										'password' => $_POST["password"],
										'wannabe' =>$_POST["wannabe"],
									);
									$data[] = $extra;
									$final_data = json_encode($data);
									if(file_put_contents('users.json',$final_data))
									{
										$messege=" <label class ='success'> Successfully Done</label>"; 
									}
						
								}
								else{
									$error = "JSON NOT EXISTS";
								}
								
							}
?> 