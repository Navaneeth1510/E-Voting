<?php
    session_start();
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    $query="SELECT * FROM candidate_list";
    $result=mysqli_query($con,$query);
    $query2="SELECT Candidate_ID , FullName, Party_Name, Party_image from candidate_list c,party_list p where c.Party_ID=p.Party_ID";
    $result2=mysqli_query($con,$query2);
?>
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
            font-size:20px;
        }
        .body{
            display:flex;
            width:95%;
            height:77vh;
            /* border:1px solid black; */
            margin:1% 2.5% 1.1% 2.5%;
        }
        .left{
            width:50.7%;
            margin:0% 1% 0% 0%;
            border-right:1px solid black;
            align-items: center;
        }
        .table{
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            width: 95%;
            border: 1px solid #E2DBDA;
            padding: 4px 0px;
            border-radius:8px 8px 0 0;
            margin:6% 3.5% 2% 0%;
            background-color: black;
            color:white;
            overflow: hidden ;
            align-items: center;
            text-align: center;
        }
        .table thead tr{
            font-weight: bold;
            font-size:1rem;
            color:white;
            background-color:black;
            border-bottom: 4px solid black;
        }
        .table tbody tr{
            font-size: 0.9rem;
        }
        .table tbody th,.table tbody td{
            padding:5px 5px;
            color:black;
        }
        .table tbody tr{
            border-bottom: 1px solid #E2DBDA ;
        }
        .table tbody tr:nth-of-type(even){
            background-color:#C3C2C0;
        }
        .table tbody tr:nth-of-type(odd){
            background-color:#DAD9D7;
        }
        .table tbody tr:last-of-type{
            border-bottom: 4px solid black;
        }
        .right{
            width:50%;
            margin:0% 0% 0% -1%;
            border-left:1px solid black;
            align-items:center;
        }
        .up{
            width:90%;
            margin:10% 5% 2% 5%;
            /* border:1px solid black; */
            padding:1% 0 1% 0%;
            text-align: center;
        }
        .down{
            width:70%;
            margin:2% 5% 2% 5%;
            padding:3% 0 1% 24%;
            /* border:1px solid black; */
        }
        select{
            width:25%;
            border:2px solid black;
            border-radius:5px;
            text-align: center;
        }
        .heading2{
            text-decoration: underline;
        }
        .submit-button{
            width:25%;
            height:6%;
            background-color: green;
            color:white;
            margin:5% 0 0 20%;
            border-radius: 10px;
            padding:1%;
            align-items:center;
        }
        .footer{
            background-color:black;
            margin:1% 0 0 0;
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
        <div class="left">
            <table class="table">
                <thead>
                    <tr>
                        <th>Candidate ID</th>
                        <th>Candidate Name</th>
                        <th>Canidate Party</th>
                        <th>Party Symbol</th>
                    </tr>
                </thead> 
                <tbody>
                    <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result2)){
                            ?>
                            <td><?php echo $row['Candidate_ID']; ?></td>
                            <td><?php echo $row['FullName']; ?></td>
                            <td><?php echo $row['Party_Name']; ?></td>
                            <td><?php echo $row['Party_image']; ?></td>
                    </tr>
                            <?php
                        }
                    ?>
                </tbody>               
            </table>
        </div>
        <div class="right">
            <div class="up">
                <h3 class="heading2">Please select the candidate ID to vote</h3>
            </div>
            <div class="down">
                <form action="InsertVote.php" method="POST">
                    <label for="voter_id" class="input1"><b>Voter ID :</b></label>&nbsp&nbsp <?php if(isset($_SESSION['voter_id'])) echo $_SESSION['voter_id'] ?><br><br>

                    <label for="select" name="selection"><b>Select Candidate ID: </b>
                        <select name="select" class="select_id">
                            <option>---Select---</option>
                            <?php
                                while($row = mysqli_fetch_array($result)){
                            ?>
                            <option><?php echo $row['Candidate_ID']; ?></option>
                            
                            <?php
                                    }
                                ?> 
                        </select>
                    </label> <br><br>
                    <label for="submit"></label>
                    <button type="submit" class="submit-button" name="submit" value="VOTE">VOTE</button>                   
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>