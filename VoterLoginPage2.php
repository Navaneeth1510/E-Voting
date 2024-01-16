<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Login</title>
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
            display: flex;
            height:100%;
            margin:1%;
            height: 100%;
        }
        .footer{
            background-color:black;
            margin:2.3% 0 0 0;
            border:3px solid black;
            height:1rem;
            padding:4px 0 1px 0;
        }
        #c2{
            color:#FB8C25;
            font-size:15px;
            font-family: "Times New Roman", Times, serif; 
        }
        .body{
            /* width:30%; */
            align-items:center;
        }
        .voter_login{
            width:25%;
            margin:5% 37.5% 4.9% 37.5%;
            border:3px solid black;
            border-radius: 30px;
            background-color:black;
            color:#FB8C25;
        }
        .heading{
            width:95%;
            margin:-2% 2.5% 0 2.5%;
            text-align:center;
        }
        .h2{
            font-size:25px;
            padding:0 0 9px 0;
            border-bottom:2px solid #FB8C25;
        }
        .details{
            width:80%;
            margin:0 10% 0 10%;
            /* border:1px solid black; */
            /* text-align:center; */
        }
        .input1{
            text-align:left;
            font-size:22px;
        }
        .input{
            align-items:center;
            width:90%;
            margin:3% 10% 0 4%;
            border:2px solid black;
            border-radius:7px;
            height:25px;
        }
        .foot{
            align-items:center;
            text-align:center;
            margin-bottom:5%;
        }
        .submit{
            width:40%;
            height:40px;
            margin-top:5%;
            border-radius:10px;
            font-size:20px;
            background-color: green;
            color:white;
        }
    </style>
</head>
<body>
    <div class="header">
        <center id="c1">GENERAL ELECTIONS - 2024</center>
    </div>
    <div class="body">
        <div class="voter_login">
            <form action='Voter2.php' method='POST'>
                <div class="heading">
                    <h2 class="h2">VOTER LOGIN</h2>
                </div>
                <div class="details">
                    <label for="email" class="input1">Voter ID</label><br>
                    <input type='text' class="input" name='voter_id' placeholder="Enter Voter ID"required/><br><br>

                    <label for="password" class="input1">Password</label><br>
                    <input type='password' class="input" name='password' placeholder="Enter Password"required/><br><br>
                </div>
                <div class="foot">
                    <input class="submit" type='submit' name='submit' id="submit" />
                </div>
            </form>
        </div>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>