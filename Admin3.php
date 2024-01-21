<?php
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if( isset($_POST['admin_id']) && isset($_POST['password'])){
            $admin_id=$_POST['admin_id'];
            $pass=$_POST['password'];

            //query
            $sql="SELECT Admin_ID, Password FROM admin_login where Admin_ID=$admin_id and Password='$pass'";

            //execute the query
            $query = mysqli_query($con,$sql);

            //if more than one entries are present
            if(mysqli_num_rows($query)>0){
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Successful Login !!"); 
                        window.location.href = "AdminPage7.php";
                        }
                        </script>';
            }
            else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Wrong Credentials"); 
                        window.location.href = "AdminLoginPage3.php"; 
                        }
                        </script>';
            }
        }
    }
?>