
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
    $sql = "SELECT id, category, paymentMethod, amount, currency, dateTransaction, comments FROM expenses_1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {
            echo "<tr><td>".$row["id"]."</td><td>".$row["category"]."</td><td>".$row["paymentMethod"]."</td></tr>";
        }
        echo "</table>"
    }else {
        echo "0 result";
    }
    $conn-> close();
}

?>