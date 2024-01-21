<?php
    $con = mysqli_connect('localhost', 'root', '', 'e-voting') or die("Connection failed: " . mysqli_connect_error());
    $sql = "SELECT c.FullName as name, COUNT(*) as count FROM votes v JOIN candidate_list c ON v.candidate_id = c.candidate_id GROUP BY c.Candidate_ID";
    $result = mysqli_query($con, $sql);
    $sql1="SELECT c.FullName, p.Party_Name, COUNT(v.Candidate_ID) as voteCount FROM votes v JOIN candidate_list c ON v.candidate_id = c.candidate_id JOIN party_list p ON c.party_id = p.party_id GROUP BY c.Candidate_ID ORDER BY c.Candidate_ID";
    $result1 = mysqli_query($con, $sql1);
    $sql2="SELECT FullName, Party_Name,MAX(voteCount) FROM (SELECT c.FullName, p.Party_Name, COUNT(v.Candidate_ID) as voteCount FROM votes v JOIN candidate_list c ON v.candidate_id = c.candidate_id JOIN party_list p ON c.party_id = p.party_id GROUP BY c.Candidate_ID ORDER BY c.Candidate_ID) as max";
    $result2 = mysqli_query($con, $sql2);
    $row3 = mysqli_fetch_array($result2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script type="text/javascript">
        window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
                title: {
                    text: "Votes per Candidate"
                },
                legend: {
                    maxWidth: 350,
                    itemWidth: 120
                },
                data: [
                    {
                        type: "pie",
                        showInLegend: true,
                        legendText: "{indexLabel}",
                        dataPoints: [
                            <?php 
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                { y: <?php echo $row['count']; ?>, indexLabel: "<?php echo $row['name']; ?>" },
                            <?php 
                                }
                            ?>
                        ]
                    }
                ]
            });
            chart.render();
        }
    </script>
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
        .table{
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.15);
            width: 50%;
            border: 1px solid #E2DBDA;
            padding: 4px 0px;
            border-radius:4px 4px 0 0;
            margin:5% 25% 0% 25%;
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
            text-align:center;
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
        .body{
            display: flex;
            /* border:1px solid black; */
            height:100%;
            margin:1%;
            height: 100%;
            width:80%;
            margin:2% 10% 0 10%;
        }
        .result{
            width:60%;
            height:100%;
            /* border:1px solid black; */
        }
        .heading2{
            padding-top:5%;
            margin:0 0 5% 0%;
            text-decoration: underline;
        }
        .outside{
            /* border:1px solid black; */
            width:30%;
            height:60vh;
            margin:0% 0 0 0%;
        }
        .chart{
            width:90%;
            height:80%;
            margin:10% 5% 10% 5%;
            padding-top:2%;
        }
        .footer{
            background-color:black;
            margin:1% 0 0 0;
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
            /* width:30%; */
            align-items:center;
        }
    </style>
</head>
<body>
    <div class="header">
        <center id="c1">GENERAL ELECTIONS - 2024</center>
    </div>
    <div class="body">
        <div class="result">
            <h3 class="heading2">GENERAL ELECTION RESULTS</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3">Vote Counts</th>
                    </tr>
                    <tr>
                        <th>Candidate</th>
                        <th>Party</th>
                        <th>Votes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                        while($row1 = mysqli_fetch_assoc($result1)){
                            ?>
                            <td><?php echo $row1['FullName']; ?></td>
                            <td><?php echo $row1['Party_Name']; ?></td>
                            <td><?php echo $row1['voteCount']; ?></td>
                    </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </table> 
            <br>
            <h3 class="heading3">ELECTION WINNER : <?php echo $row3['FullName']; ?> - <?php echo $row3['Party_Name']; ?></h3>
        </div>
        <div class="outside">
            <div id="chartContainer" class="chart" style="">
             
            </div>
        </div> 
    </div>   
    <div class="footer">
        <center id="c2">ELECTION COMMISION OF INDIA</center>
    </div>
</body>
</html>

<?php
    // Close the database connection
    mysqli_close($con);
?>
