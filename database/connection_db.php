<?php
    $server_name="localhost";
    $user_name="root";
    $password= "";  
    $databaseName="Orient_ceramics";
    $conn=mysqli_connect($server_name,$user_name,$password,$databaseName);
    if($conn){
        // echo"connection sucessfully";
    }
    else{
        echo "error:".mysqli_connect_error();
    }
?>