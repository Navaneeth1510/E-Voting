<?php 
    session_start();
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit'])){
        $candidate_id=$_POST['select'];
        $voter_id=$_SESSION['voter_id'];
        //fetch the election id
        $sql1="SELECT Election_ID from election";
        $query1=mysqli_query($con,$sql1);
        $row1=mysqli_fetch_assoc($query1);
        $election_id=$row1['Election_ID'];
        //insert the vote into the table
        $sql2="INSERT into votes (`Voter_ID`,`Candidate_ID`,`Election_ID`) VALUES($voter_id,$candidate_id,$election_id)";
        $query2=mysqli_query($con,$sql2);
        if($query2){
            $sql3="UPDATE voter_list SET Status=1 WHERE Voter_ID=$voter_id";
            $query3=mysqli_query($con,$sql3);
            if($query3){
                echo '<script type="text/javascript">
                    window.onload = function () { 
                    window.location.href = "ThankVotingPage.php"; // Redirect after the alert is closed
                    }</script>';
            }
            else{
                echo '<script type="text/javascript">
                    window.onload = function () { 
                    alert("Status didnt change.");
                    window.location.href = "VotingPage8.php"; // Redirect after the alert is closed
                    }</script>';
            }
        }
        else{
            echo '<script type="text/javascript">
                    window.onload = function () { 
                    alert("Due to some error, the vote wasnt done.");
                    window.location.href = "VotingPage8.php"; // Redirect after the alert is closed
                    }</script>';
        }
    }
?>