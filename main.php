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
                //echo"--------CONNECTED---------";
            }     }
        function insert($ename,$city,$econtact, $esalary, $folder)
        {
            $sql= "INSERT INTO `employee`(`ename`, `ecity`, `econtact`, `esalary`, `esign`) VALUES ('$ename','$city','$econtact','$esalary','$folder')";
            $result=mysqli_query($this->db,$sql);
            if($result)
            {
                header("location:display.php");
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
      
        function update($e_id,$ename,$ecity,$econtact,$esalary,$folder)
        {
           // $e_id=$_POST['e_id'];
            $sql="UPDATE `employee` SET `ename`='$ename',`ecity`='$ecity',`econtact`='$econtact',`esalary`='$esalary',`esign`='$folder' WHERE `e_id`='$e_id'";
            $res=mysqli_query($this->db,$sql);
            if($res){
                header("location:display.php");
            }else{
                echo 'data not updated';
            }
        }
        function delete($e_id)
        {
            $sql= "DELETE FROM `employee` WHERE `e_id`='$e_id'";
            $result=mysqli_query($this->db,$sql);
            if($result){
                header("location:display.php");
            }else{
                echo 'data not deleted.......';
            }
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
    elseif(isset($_POST['update']))
    {
        $e_id=$_POST['e_id'];
        $ename=$_POST['ename'];
        $ecity=$_POST['ecity'];
        $econtact=$_POST['econtact'];
        $esalary=$_POST['esalary'];
        $file=$_FILES['esign']['name'];
        $tname=$_FILES['esign']['tmp_name'];
        $folder="image/".$file;
        move_uploaded_file($tname, $folder);         
        $ob->update($e_id,$ename,$ecity,$econtact,$esalary,$folder);
    }
    elseif(isset($_POST['delete'])){
        $id=$_POST['e_id'];
        $ob->delete($id);
    }
   
?>