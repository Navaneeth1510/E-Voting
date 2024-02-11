<?php
    $con=mysqli_connect('localhost','root','','e-voting') or die("Connection failed: ".mysqli_connect_error());
    $query="SELECT * FROM votes";
    $result=mysqli_query($con,$query);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <script src="Disable.js"></script>
    <script src="DisableHistory.js"></script>
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
            color:#DEFBF9;
            font-family: "Times New Roman", Times, serif; 
        }
        .body{
            display: flex;
            height:100%;
            margin:1%;
        }
        .votes{
            width:90%;
            margin:5% 5% 12.3% 5%;
        }
        .table{
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            width: 90%;
            border: 1px solid #E2DBDA;
            padding: 5px;
            border-radius:8px 8px 0 0;
            margin:1% 5% 1% 5%;
            background-color: black;
            color:white;
            overflow: hidden ;
            align-items: center;
            text-align: center;
        }
        .table thead tr{
            font-weight: bold;
            font-size:1.1rem;
            color:white;
            background-color:black;
            border-bottom: 4px solid black;
            height:10px;
        }
        .table tbody tr{
            font-size: 1rem;
        }
        .table tbody th,.table tbody td{
            padding:8px 8px;
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
        .footer{
            background-color:black;
            border:3px solid black;
            height:1rem;            
            margin:0 0.5% 0.5% 0;
            width:98.65%;
            position: absolute; 
            bottom: 0;
        }
        #c2{
            color:#DEFBF9;
            font-size:15px;
            font-family: "Times New Roman", Times, serif; 
        }
        .logout-button{
            font-weight: bold;
            width:9%;
            border-radius: 10px;
            background-color: red;
            padding:0.5% 0 0.5% 0;
            margin:0 0 0 85%;
        }
    </style>
</head>
<body oncontextmenu="return false;">
    <div class="header">
        <center id="c1">GENERAL ELECTIONS - 2024</center>
    </div>
    <div class="body">
        <div class="votes">
            <table class="table">
                <thead>
                    <tr class="first-row">
                        <th>Vote_ID</th>
                        <th>Election ID</th>
                        <th>Candidate_ID</th>
                        <th>Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                            ?>
                            <td><?php echo $row['Vote_ID']; ?></td>
                            <td><?php echo $row['Election_ID']; ?></td>
                            <td><?php echo $row['Candidate_ID']; ?></td>
                            <td><?php echo $row['Timestamp']; ?></td>
                    </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="logout">
        <a href="AdminPage7.php"><button class="logout-button">Back</button></a>
    </div>
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>



