<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of expenses</title>
    <style>
    #table1 {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #table1 td, #table1 th {
    border: 1px solid #ddd;
    padding: 8px;
    }

    #table1 tr:nth-child(even){background-color: #f2f2f2;}

    #table1 tr:hover {background-color: #ddd;}

    #table1 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
    <table id="table1">
        <tr>
            <th>Id</th>
            <th>Category</th>
            <th>Payment Method</th>
            <th>Amount</th>
            <th>Currency</th>
            <th>Date</th>
            <th>Comments</th>
            <th>Processed</th>
        </tr>

        <?php

        
        $host = "localhost";
        $dbusername = "manufria_testu";
        $dbpassword = "beardown12";
        $dbname = "manufria_newdb";

        
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
        }else{
            $sql = "SELECT id, category, paymentMethod, amount, currency, dateTransaction, comments, dataProcessed FROM expenses_1";
            $result = $conn-> query($sql);
            if ($result-> num_rows > 0) { 
                
                while ($row = $result-> fetch_assoc()) {
                    echo "<tr><td>".$row["id"]."</td><td>".$row["category"]."</td><td>".$row["paymentMethod"]."</td><td>".$row["amount"]."</td><td>".$row["currency"]."</td><td>".$row["dateTransaction"]."</td><td>".$row["comments"]."</td><td>".$row["dataProcessed"]."</td></tr>";
                }
                echo "</table>";
            }else {
                echo "0 result";
            }
            $conn-> close();
        }        

        ?>


    </table>
</body>
</html>