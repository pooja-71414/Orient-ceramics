<?php
require_once('main.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <?php include 'css.php' ?>
</head>

<body>
    <?php include 'menu.php' ?>
    <div class="container-fluid">
        <div class="card mt-3 ">
            <div class="card-header">
                <h3>
                    <div class="row">
                        <div class="col">id</div>
                        <div class="col">name</div>
                        <div class="col">action</div>
                    </div>
                </h3>
            </div>
            <div class="card card-body">
                <?php
                //$id=$_GET['e_id'];
                $data = $ob->view();
                while ($row = mysqli_fetch_assoc($data)) {
                ?>
                    <div class="row ">
                        <div class="col">
                            <?php echo $row["e_id"] ?>
                        </div>
                        <div class="col">
                            <?php echo $row["ename"] ?>
                        </div>
                        <div class="col">
                            <form action="" method="POST">
                                <a href="view.php?e_id=<?php echo $row['e_id']; ?>" name="userview" class="btn btn-info">
                                    view
                                </a>
                                <a href="update.php?id=<?php echo $row['e_id']; ?>" class="btn btn-success">update</a>
                                <input type="number" name="e_id" value="<?php echo $row['e_id']; ?>" hidden>
                                <button class="btn btn-danger" type="submit" name="delete" onclick="return confirm('are you sure to delete')">delete</button>
                            </form>
                        </div>
                    </div>
                    <hr class="bg bg-info">
                <?php } ?>
            </div>
        </div>
    </div>


    <!--<div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php //echo $row["e_id"]; 
                            ?></td>
                        <td><?php //echo $row["ename"]; 
                            ?></td>
                        <td>                        
                            <form action="" method="POST">
                                <a href="view.php?id=<?php //echo $row['e_id']; 
                                                        ?>" class="btn btn-info">
                                    view
                                </a>

                                <a href="update.php?id=<?php //echo $row['e_id']; 
                                                        ?>" class="btn btn-success">update</a>


                                <input type="number" name="e_id" value="<?php //echo $row['e_id'];
                                                                        ?>" hidden>
                                <button class="btn btn-danger" type="submit" name="delete" onclick="return confirm('are you sure to delete')">delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php
                    //}
                    ?>
            </tbody>
            </table>
        </div>-->
                    

    <?php include 'js.php' ?>
</body>

</html>