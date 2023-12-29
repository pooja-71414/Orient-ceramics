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
        
        <div class="card w-50 m-auto">
            <div class="card-header">
                <h3 class="text text-warning text-center">Employee Table</h3>
            </div>
            <div class="card-body">
                <form class="form" enctype="multipart/form-data">
                    <div class="form-group">
                        <label class="form-label" for="e_id">* Employee Id</label>
                        <input type="number" class="form-control" name="e_id" placeholder="Entere Id Here" required/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ename">* Employee Name</label>
                        <input type="text" class="form-control" name="ename" placeholder="Entere Your Name Here"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="ecity">* Employee City</label>
                        <input type="text" class="form-control" name="ecity" placeholder="Entere City Name Here"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="econtact">* Employee Contact Number</label>
                        <input type="number" class="form-control" name="econtact"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="esalary">* Employee Salary</label>
                        <input type="number" class="form-control" name="esalary"/>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="esign">* Employee Signature</label>
                        <input type="file" class="form-control" name="esign"/>
                    </div>
                    <div class="mt-3">
                        <button class="btn btn-danger" type="submit" name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php include 'js.php'?>
</body>
</html>