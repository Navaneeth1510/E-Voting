<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Voter Details</title>
    <style>
        body{
            background-color: #DEFBF9 ;
            background-blend-mode: darken;
            /* #FB8313,#FB7E0B */
            background-attachment: fixed;
        }
        .header{
            background-color:black;
            border:4px solid black;
            height:0.8rem;
            padding:8px 0 35px 0;
        }
        #c1{
            font-size:35px;
            color:#DEFBF9;
            font-family: "Times New Roman", Times, serif; 
        }
        .body{
            display: flex;
            height:100%;
            margin:1%;
            height: 100%;
        }
        .footer{
            background-color:black;
            margin:2.5% 0 0 0;
            border:3px solid black;
            height:1rem;
            padding:4px 0 1px 0;
        }
        #c2{
            color:#DEFBF9;
            font-size:15px;
            font-family: "Times New Roman", Times, serif; 
        }
        .body{
            width:95%;
            margin:1% 2.5% 0 2.5%;
            align-items:center;
        }
        .heading{
            width:95%;
            margin:-2% 2.5% 0 2.5%;
            text-align:center;
        }
        .submit-button{
            width:8%;
            height:37px;
            margin-bottom:0.5%;
            border-radius:10px;
            font-size:20px;
            background-color: green;
            color:#DEFBF9;
        }
        .details{
            width:87.5%;
            /* border-bottom:2px solid black; */
            margin:5% 2.5% 11% 7.5%;
            display:flex;
        }
        .voter-img{
            width:10%;
            border:1px solid black;
            padding:0 10% 0 10%;
        }
        .voter-details{
            display:flex;
            width:40%;
            margin:0 0 0 10%;
            border-left:2px solid black;
            width:
        }
        .answers{
            width:50%;
            margin:1% 2% 1% 4%;
            /* border:1px solid black; */
        }
        .in-details{
            /* border:1px solid black; */
            margin:1% 2% 1% 3%;
            font-weight:bold;
        }
        .image{
            width:280%;
            height:75%;
            margin:38% 0 32.5% 50%;
            border:1px solid black;
            /* border-radius:200px; */
        }
        .agree-stmt{
            width:95%;
            /* border:2px solid black; */
            margin:5% 2.5% 3.8% 2.5%;
        }
        .submit{
            width:95%;
            /* border:1px solid black; */
            margin:0 2.5% 0 2.5%;
        }
    </style>
</head>
<body>
    <div class="header">
        <center id="c1">GENERAL ELECTIONS - 2024</center>
    </div>
    <div class="details">
        <div class="voter-image">
            <div class="image">
                <center>imag</center>
            </div>
        </div>
        <div class="voter-details">
            <div class="in-details">
                Voter ID: <br>
                First Name: <br>
                Last Name: <br>
                Date Of Birth: <br>
                Address: <br>
                Email: <br>
            </div>
            <div class="answers">
                <?php if(isset($_SESSION['voter_id'])) echo $_SESSION['voter_id'] ?><br>
                <?php if(isset($_SESSION['fname'])) echo $_SESSION['fname'] ?><br>
                <?php if(isset($_SESSION['lname'])) echo $_SESSION['lname'] ?><br>
                <?php if(isset($_SESSION['dob'])) echo $_SESSION['dob'] ?><br>
                <?php if(isset($_SESSION['address'])) echo $_SESSION['address'] ?><br>
                <?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?><br>
            </div>
        </div>
    </div>
    <div class="agree-stmt">
        <form action="VotingPage8.php">
            <input type="checkbox" class="checkbox" required>
            <label>By clicking this, you agree that these details belong to you and are correct.</label><br><br>
            <input type="submit" class="submit-button" value="I,Agree">
        </form>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>