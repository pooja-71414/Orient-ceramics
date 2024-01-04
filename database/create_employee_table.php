<?php
$con=mysqli_connect("localhost","root","","Orient_ceramics");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
echo "Connected successfully";
}

$sql="CREATE TABLE employee(e_id INT(5) AUTO_INCREMENT PRIMARY KEY,ename VARCHAR(255) NOT NULL ,ecity VARCHAR(255) NOT NULL,econtact VARCHAR(255),esalary int(6),esign VARCHAR(255) NOT NULL)";
$result=mysqli_query($con,$sql);
if (!$result) {
    die("ERROR:". mysqli_error($con));
}
else {
    echo "\n---EMPLOYEE TABLE CREATED---";
}
?>