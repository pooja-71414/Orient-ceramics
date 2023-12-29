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

?>