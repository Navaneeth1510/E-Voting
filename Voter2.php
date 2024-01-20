<?php
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        if( isset($_POST['voter_id']) && isset($_POST['password'])){
            $voter_id=$_POST['voter_id'];
            $password=$_POST['password'];

            //query
            $sql="SELECT Voter_ID, Password, Status FROM voter_list where Voter_ID=$voter_id and Password='$password'";

            //execute the query
            $query = mysqli_query($con,$sql);

            //if more than one entries are present
            if(mysqli_num_rows($query)>0){
                //fetch all the entries and store it in row
                $row=mysqli_fetch_assoc($query);
                if($row['Status']==0){
                    echo '<script type="text/javascript">
                            window.onload = function () { 
                            alert("Successful Login !!"); 
                            window.location.href = "VoterAgreePage4.php";
                            }
                            </script>';
                }
                else{
                    echo '<script type="text/javascript">
                            window.location.href = "AlreadyVotedPage.php";
                            </script>';
                }
            }
            else{
                echo '<script type="text/javascript">
                        window.onload = function () { 
                        alert("Wrong Credentials"); 
                        window.location.href = "VoterLoginPage2.php"; 
                        }
                        </script>';
            }
        }
    }
?>