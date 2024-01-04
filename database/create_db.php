<?php
    $server_name="localhost";
    $user_name="root";
    $password="";
    $con=mysqli_connect($server_name,$user_name,$password);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else {
    echo "Connected successfully";
    }

    // Create a database
    $databaseName = "Orient_ceramics";
    $sql = "CREATE DATABASE $databaseName";

    if ($con->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $con->error;
    }

    // Close the connection
    $con->close();
?>