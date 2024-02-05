<?php
    session_start();
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if( isset($_POST['otp'])){
            $otp=$_POST['otp'];
            if($otp==$_SESSION['otp']){
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Successful!"); 
                        window.location.href = "VoterChangePassword.php";
                        }
                        </script>';
            }
            else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("OTP is incorrect!"); 
                        window.location.href = "ForgotPassword.php";
                        }
                        </script>';
            }
        }
        else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Some error occured!"); 
                        window.location.href = "VoterLoginPage2.php";
                        }
                        </script>';
        }
    }
?>