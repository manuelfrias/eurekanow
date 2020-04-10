<?php
$category = filter_input(INPUT_POST, 'typeofcharge-name');
$paymentMethod = filter_input(INPUT_POST, 'methodofpayment-name');
if (!empty($category)){
if (!empty($paymentMethod)){
$host = "localhost";
$dbusername = "manufria_testu";
$dbpassword = "beardown12";
$dbname = "manufria_newdb";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO expenses_1 (category, paymentMethod)
values ('$category','$paymentMethod')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Payment method should not be empty";
die();
}
}
else{
echo "Category should not be empty";
die();
}
?>