<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Online Voting Portal</title>
    <style>
        body{
            background-color: #DEFBF9 ;
            background-blend-mode: darken;
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
            color:#DEFBF9   ;
            font-family: "Times New Roman", Times, serif; 
        }
        .heading2{
            font-weight: bold;
            font-family: "Times New Roman", Times, serif; 
            font-size:25px;
            text-decoration: underline;
            margin-top:12%;
            margin-bottom:3%;
        }
        .heading1{
            font-weight: bold;
            font-family: "Times New Roman", Times, serif; 
            font-size:25px;
            text-decoration: underline;
        }
        .body{
            display: flex;
            /* margin-top: */
            height:100%;
        }
        .right{
            width:47%;
            height:150%;
            border-right:1px solid black;
            margin:1% 0 -2% 3%;
            padding: 0 0 4% 0;
        }
        .unlist1{
            font-family: "Times New Roman", Times, serif; 
            font-size:25px;
        }
        .left{
            width:47%;
            border-left:1px solid black;
            margin:1% 3% -2% 0;
            padding-top: 3.5%;
        }
        .login-button{
            background-color:black;
            color:#DEFBF9 ;
            width:25%;
            height:25%;
            font-family: "Times New Roman", Times, serif;
            font-size:20px;
            border-radius:15px;
            align-items:center;
            text-align:center;
            margin:0 37.5% 0 37.5%;
            padding: 2% 0 2% 0;
        }
        .result-button{
            background-color:black;
            color:#DEFBF9 ;
            width:25%;
            height:100%;
            font-family: "Times New Roman", Times, serif;
            font-size:20px;
            border-radius:15px;
            margin:0 0 0 78%;
            text-align:center;
        }
        .left-up{
            margin:-4% 0 0 0;
            height:12%;
        }
        .left-down{
            margin:-2.5% 0 0 0;
        }
        .login{
            margin-bottom:5%;
            /* margin-top:-0.25%; */
        }
        .footer{
            background-color:black;
            margin:2.2% 0 0 0;
            border:3px solid black;
            height:1rem;
            padding:4px 0 1px 0;
        }
        #c2{
            color:#DEFBF9 ;
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
        <div class="right">
            <h2 class="heading1">Voting Instructions</h2>
            <ul class="unlist1">
                <li>Date - 15/01/2024</li>
                <li>Ward Name- Rajarajeshwari Nagar</li>
                <li>Ward No - 45</li>
                <li>Every voter can vote exactly once.</li>
                <li>Every voter must log in to their accounts before voting.</li>
                <li>Once logged in, kindly verfify your details and click the Agree button.</li>
                <li>Carefully check the candidate details and select the ID of the candidate You are wishing to vote</li>
                <li>After 2 minutes the session will be automatically destroyed.</li>
                <li>Voters can view the result once the election is over.</li>
            </ul>                    
        </div>
        <div class="left">
            <div class="left-up">
                <a href="ResultDecision5.php"><button type="button" class="result-button">RESULT</button></a>
            </div>
            <div class="left-down">
                <h2 class="heading2 login"><center>LOGIN</center></h2>
                <a href="VoterLoginPage2.php"><button type="button" class="login-button">VOTER</button></a><br><br>
                <a href="AdminLoginPage3.php"><button type="button" class="login-button">ADMIN</button></a>
            </div>
        </div>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>