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
        <div class="card mt-3">
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
                                <input type="number" name="e_id" value="<?php echo $row['e_id']; ?>" hidden>
                                <button class="btn btn-info" type="submit" name="view" onclick="return confirm('are you sure to view data')">view</button>
                            </form>
                            <!-- <form action="" method="POST">
                            <input type="number" name="e_id" value="<? //php echo $row['e_id'];
                                                                    ?>" hidden>
                        <button class="btn btn-primary" type="submit" name="update"
                            onclick="return confirm('are you sure to update')">update</button>"
                        </form>
                        <form action="" method="POST">
                        <input type="number" name="e_id" value="<? //php echo $row['e_id'];
                                                                ?>" hidden>
                        <button class="btn btn-danger" type="submit" name="delete"
                            onclick="return confirm('are you sure to delete')">delete</button>
                    </form>-->
                        </div>
                    </div>
                    <hr class="bg bg-info">
                <?php } ?>
            </div>
        </div>
    </div>
    <?php include 'js.php' ?>
</body>

</html>