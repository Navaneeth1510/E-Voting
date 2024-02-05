<?php
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    $sql="SELECT Status from election";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($query);
    //==> Election Status=0 : Election is stopped
    if($query && $row['Status']==0){
        //make the election status as going on
        $sql1="UPDATE election SET Status = 1";
        $q1=mysqli_query($con,$sql1);
        //delete all the previous votes done
        $sql2="DELETE from votes";
        $q2=mysqli_query($con,$sql2);
        //make the status of all voters as not yet voted
        $sql3="UPDATE voter_list SET Status = 0";
        $q3=mysqli_query($con,$sql3);
        //make the result table also empty
        $sql4="DELETE from result";
        $q4=mysqli_query($con,$sql4);
        echo'<script>
                window.location.href="ElectionStartedPage.php";
                </script>';
    }
    //==> Election Status=1 : Election is going on
    else{
        echo'<script>
                window.location.href="AlreadyStartedPage.php";
                </script>';
    }
?>