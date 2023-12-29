<?php
$con=mysqli_connect("localhost","root","","Orient_ceramics");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
echo "Connected successfully";
}

$sql="CREATE TABLE employee(e_id INT(5) AUTO_INCREMENT PRIMARY KEY,ename VARCHAR(20) NOT NULL ,ecity VARCHAR(25) NOT NULL,econtact VARCHAR(10),esalary VARCHAR(11),esign VARCHAR(100) NOT NULL)";
$result=mysqli_query($con,$sql);
if (!$result) {
    die("ERROR:". mysqli_error($con));
}
else {
    echo "\n---EMPLOYEE TABLE CREATED---";
}
?>