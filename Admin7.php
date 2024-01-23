<?php
    session_start();
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if( isset($_POST['admin_id']) && isset($_POST['password'])){
            $admin_id=$_POST['admin_id'];
            $password=$_POST['password'];

            //query
            $sql="SELECT * FROM admin_login where Admin_Id=$admin_id and Password='$password'";
            $sql1="SELECT Status FROM election";
            //execute the query
            $query = mysqli_query($con,$sql);
            $query1 = mysqli_query($con,$sql1);
            $row1=mysqli_fetch_assoc($query1);
            //if more than one entries are present
            if(mysqli_num_rows($query)>0){
                //fetch all the entries and store it in row
                $_SESSION['admin_id']=$row['Admin_Id'];
                        $_SESSION['name']=$row['Name'];
                        $_SESSION['email']=$row['Email'];
                        $_SESSION['post']=$row['Post'];
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
                        window.location.href = "VoterLoginPage2.php"; 
                        }
                        </script>';
            }
            if (isset($_POST['btn'])) {
                $buttonClicked = $_POST['btn'];
            
                // Redirect based on the button clicked
                switch ($buttonClicked) {
                    case 'change_password':
                        header('Location: ChangePasswordAd.php');
                        break;
                    case 'votes':
                        header('Location: votes.php');
                        break;
                    case 'start_election':
                        header('Location: start_election.php');
                        break;
                    case 'stop_election':
                        header('Location: stop_election.php');
                        break;
                    case 'logout':
                        header('Location: logout.php');
                        break;
                    default:
                        // Handle other cases if needed
                        break;
                }
            }
        }
    }
?>