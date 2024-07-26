<?php
include("database/connection_db.php");
require_once('main.php');
/*$id=$_POST['e_id'];
$sql="SELECT `e_id`, `ename`, `ecity`, `econtact`, `esalary`, `esign` FROM `employee` WHERE `e_id`='$id'";
$result=mysqli_query($this->db, $sql);
if($result) {
    echo "display";
} else {    
    echo "not";
}*/
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <?php include 'css.php' ?>
</head>

<body>
    <?php include 'menu.php' ?>
    
    <div class="container-fluid">
        <div class="card mt-3">
            <div class="card-header">
                <h3>
                    <div class="row">
                        <div class="col">id</div>
                        <div class="col">name</div>
                        <div class="col">city</div>
                        <div class="col">contact</div>
                        <div class="col">salary</div>
                        <div class="col">sign</div>
                        <!--<div class="col">action</div>-->
                    </div>
                </h3>
            </div>
            <div class="card card-body">

            <?php
			 $e_id=$_GET['e_id'];
             // echo $id;
               $sql="SELECT * FROM employee WHERE e_id='$e_id'";      
               $res = mysqli_query($conn, $sql);
               
               while ($row = mysqli_fetch_assoc($res)) {
				?>
                    <div class="row ">
                        <div class="col">
                            <?php echo $row["e_id"] ?>
                        </div>
                        <div class="col">
                            <?php echo $row["ename"] ?>
                        </div>
                        <div class="col">
                            <?php echo $row["ecity"] ?>
                        </div>
                        <div class="col">
                            <?php echo $row["econtact"] ?>
                        </div>
                        <div class="col">
                            <?php echo $row["esalary"] ?>
                        </div>
                        <div class="col">
                            <?php echo "<img src='".$row["esign"]."'height='100px' width='100px'>"; ?>
                        </div>
                       
                    </div>
                    <hr class="bg bg-info">
                <?php  } ?>
            </div>
        </div>
    </div>
    <?php include 'js.php' ?>
</body>

</html>