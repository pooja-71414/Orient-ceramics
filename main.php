<?php
    class main
    {
        private $db;
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
        function insert($ename,$city,$econtact, $esalary, $folder)
        {
            $sql= "INSERT INTO `employee`(`ename`, `ecity`, `econtact`, `esalary`, `esign`) VALUES ('$ename','$city','$econtact','$esalary','$folder')";
            $result=mysqli_query($this->db,$sql);
            if($result)
            {
                echo"data inserted sucessfully";
            }
            else
            {
                echo "not inserted sucessfully";
            }
        }
        function view()
        {
            $sql= "SELECT * FROM `employee`";
            $result=mysqli_query($this->db,$sql);
                      
            return $result;
        }

    }
    $ob=new main();
    if(isset($_POST["submit"]))
    {
        $ename=$_POST['ename'];
        $city=$_POST['ecity'];
        $econtact=$_POST['econtact'];
        $esalary=$_POST['esalary'];
        $file=$_FILES['esign']['name'];
        $tname=$_FILES['esign']['tmp_name'];
        $folder="image/".$file;
        move_uploaded_file($tname, $folder);
        $ob->insert($ename,$city,$econtact, $esalary, $folder);
    }
?>