<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Error</title>
    <style>
        body{
            background-image: linear-gradient(#FB8C25 ,#F9881F); 
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
            color:#FB8C25;
            font-family: "Times New Roman", Times, serif; 
        }
        .body{
            font-size:30px;
            font-weight: bold;
            width:90%;
            margin:16% 5% 14% 5%;
        }
        .logout-button{
            font-weight: bold;
            width:9%;
            border-radius: 10px;
            background-color: red;
            padding:0.5% 0 0.5% 0;
            margin:0 0 0 85%;
        }
        .footer{
            background-color:black;
            margin:1.95% 0 0 0;
            border:3px solid black;
            height:1rem;
            padding:4px 0 1px 0;
        }
        #c2{
            color:#FB8C25;
            font-size:15px;
            font-family: "Times New Roman", Times, serif; 
        }
    </style>
</head>
<body>
    <div class="header">
        <center id="c1">GENERAL ELECTIONS - 2024</center>
    </div>
    <div class="body">
        <center>OOPS, Sorry! You have already voted</center>
    </div>
    <div class="logout">
        <a href="VoterLoginPage2.php"><button class="logout-button">LOGOUT</button></a>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>