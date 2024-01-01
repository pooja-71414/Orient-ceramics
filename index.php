

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <?php include 'css.php'?>

</head>
<body>
<?php include 'menu.php'?>

    <div class="container-fluid mt-4">
        
        <div class="card w-75 m-auto bg bg-light">
            <div class="card-header">
                <h3 class="text text-dark text-center">Employee Table</h3>
            </div>
            <div class="card-body">
                <form class="form" enctype="multipart/form-data" method="post" action="main.php">
                    
                    <div class="form-group">
                        <label class="form-label mt-4" for="ename">Employee Name</label>
                        <input type="text" class="form-control" name="ename" placeholder="Enter Your Name Here" required/>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4" for="ecity">Employee City</label>
                        <input type="text" class="form-control" name="ecity" placeholder="Enter City Name Here" required/>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4" for="econtact">Employee Contact Number</label>
                        <input type="number" class="form-control" name="econtact" placeholder="Enter Your Contact Number Here" required/>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4" for="esalary">Employee Salary</label>
                        <input type="number" class="form-control" name="esalary" placeholder="Enter Your Salary Here" required/>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-4" for="esign">Employee Signature</label>
                        <input type="file" class="form-control" name="esign" required/>
                    </div>
                    <div class="mt-4">
                        <button class="btn btn-danger" type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'js.php'?>
</body>
</html>