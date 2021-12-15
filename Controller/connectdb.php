<?php

    $servername="localhost";
    $username = "root";
    $password ="";
    $dbname= "harmony_music_school";

    $conn = mysqli_connect($servername,$username,$password , $dbname);

    if($conn)
    {
        echo "";
    }
    else{
        echo "Not Okay".mysqli_connect.error();
    }
?>