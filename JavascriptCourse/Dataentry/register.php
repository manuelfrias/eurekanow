<?php
$category = filter_input(INPUT_POST, 'typeofcharge-name');
$paymentMethod = filter_input(INPUT_POST, 'methodofpayment-name');
$amount = filter_input(INPUT_POST, 'amount-name');
$currency = filter_input(INPUT_POST, 'currency-name');
$inputdate = filter_input(INPUT_POST, 'date-name');
$date=date("Y-m-d H:i:s",strtotime($inputdate));
$comments = filter_input(INPUT_POST, 'comments-name');
if ((!empty($category)) and (!empty($paymentMethod)) and (!empty($amount)) and (!empty($currency)) and (!empty($date)) and (!empty($comments))){

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
$sql = "INSERT INTO expenses_1 (category, paymentMethod, amount, currency, dateTransaction, comments)
values ('$category','$paymentMethod','$amount','$currency','$date','$comments')";
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
    if (empty($category)) {
        echo "Category should not be empty";
    }
    if (empty($paymentMethod)) {
        echo "Payment Method should not be empty";
    }
    if (empty($amount)) {
        echo "Amount should not be empty";
    }
    if (empty($currency)) {
        echo "Currency should not be empty";
    }
    if (empty($date)) {
        echo "Date should not be empty";
    }
    if (empty($comments)) {
        echo "Comments should not be empty";
    }
die();
}
?>