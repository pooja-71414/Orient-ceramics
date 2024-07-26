<?php 
//require_once('main.php'); 
include 'main.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <?php include 'css.php'; ?>
</head>

<body>
    <?php include 'menu.php'; ?>
    <div class="container-fluid w-75">
        <div class="card my-5 m-3 border border-dark">
            <form class="form m-3" action="" method="post" enctype="multipart/form-data">
                <div class="col-12">
                    <label for="ename" class="form-label"></label>
                    <input type="text" class="form-control p-2" placeholder="enter your name" name="ename" required/>
                </div>
                <div class="col-12">
                    <label for="ecity" class="form-label"></label>
                    <input type="text" class="form-control p-2" placeholder="enter your city" name="ecity" required/>
                </div>
                <div class="col-12">
                    <label for="econtact" class="form-label"></label>
                    <input type="number" class="form-control p-2" placeholder="enter your contact" name="econtact" required/>
                </div>
                <div class="col-12">
                    <label for="esalary" class="form-label"></label>
                    <input type="text" class="form-control p-2" placeholder="enter your salary" name="esalary" required/>
                </div>
                <div class="col-12 mb-3">
                    <label for="esign" class="form-label"></label>
                    <input type="file" class="form-control p-2" placeholder="enter your signature" name="esign" required/>
                </div>
                <div class="col-12 mb-1 btn btn-auto">
                    <?php //$e_id=$_GET['e_id']; ?>
                    <input type="number" name="e_id" value="<?php echo $_GET['id']; ?>" hidden>
                    <button type="submit" name="update" class="btn btn-primary col-3 p-2">update</button>
                </div>
            </form>
        </div>
    </div>
    <?php include 'js.php'; ?>
</body>

</html>