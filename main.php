<?php
    class main
    {
        public function __construct()
        {
           $con=mysqli_connect("localhost","root","","Orient_ceramics");
           
            if(!$con)
            {
                die("Error:".mysqli_connect_error());   

            }
            else
            {
                echo"--------CONNECTED---------";
            }
        }

    }
    $ob=new main();
    if(isset($_POST["submit"]))
    {
        $e_id=$_POST['e_id'];
        $ename=$_POST['ename'];
        $city=$_POST['ecity'];
        $econtact=$_POST['econtact'];
        $esalary=$_POST['esalary'];
        $file=$_FILES['esign']['name'];
        $tname=$_FILES['esign']['name'];

    }
?>