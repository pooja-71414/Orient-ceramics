<?php
    class main
    {
        public function __construct()
        {
           $con=mysqli_connect('localhost','root','','Orient_ceramics');
           $this->db=$con;
            if(!$con)
            {
                die("Error:".mysqli_connect_error());   

            }
            else
            {
                echo"--------CONNECTED---------";
            }
        }
        function insert($e_id,$ename,$city,$econtact, $esalary, $folder)
        {
            $sql= "INSERT INTO `employee`(`e_id`, `ename`, `ecity`, `econtact`, `esalary`, `esign`) VALUES ('$e_id','$ename','$city','$econtact','$esalary','$folder')";
            $result=mysqli_query($this->db,$sql);
            
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
        $tname=$_FILES['esign']['tmp_name'];
        $folder="image/".$tname;
        move_uploaded_file($tname, $folder);
        $ob->insert($e_id,$ename,$city,$econtact, $esalary, $folder);
    }
?>