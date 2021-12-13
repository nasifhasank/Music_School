<?php
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="harmony_music_school";
  
  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error)
  {
  die("Connection failed:".$conn->connect_error);
  }
  else
  {
  $q="SELECT id,name,phone,gender,learn from student";
  $result=$conn->query($q);
  if($result->num_rows>0)
  {
  while($row=$result->fetch_assoc())

  { 
    ?>
    <table>
			<tr>
        <td> <?php echo "id:".$row["id"]."<br/>"."<br/>"."<br/>"; ?> </td>
        <td> <?php echo " Name: ".$row["name"]. "<br/>"; ?>  </td>
        <td> <?php echo " Phone: ".$row["phone"]. "<br/>"; ?>  </td>
        <td> <?php echo " Gender: ".$row["gender"]."<br/>" ; ?>  </td>
        <td> <?php echo " Learn: ".$row["learn"]."<br/>" ; ?>  </td> 
      </tr>
    </table>
 <?php
  }

  }
  else
  echo "O results";

  }
  $conn->close();
?>