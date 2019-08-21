<?php
require_once('connection.php');
?>

<?php
$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$phone = $_POST['phone'];
$roomType = $_POST['rtype'];
$checkIn = $_POST['cin'];
$checkOut = $_POST['cout'];

//generate customer id
//check room availability
//assign room_no

$uid = 1;

$query1 = "INSERT INTO user (uid, fname, lname) VALUES ('{$uid}', '{$firstName}', '{$lastName}')";
$query2 = "INSERT INTO user_phone (uid, phone_number) VALUES ('{$uid}', '{$phone}')";
$query3 = "INSERT INTO customer (cid, type) VALUES ('{$uid}', 'guest')";
$query4 = "INSERT INTO reserve (cid, room_no, rtype, checkIn, checkOut) VALUES ('{$uid}', 100, '{$roomType}', '{$checkIn}', '{$checkOut}')";
?>

<?php
if (mysqli_query($connection, $query1) && mysqli_query($connection, $query2) && mysqli_query($connection, $query3) && mysqli_query($connection, $query4)) {
    echo '<script type="text/javascript">';
    echo 'alert("Success! Your reservation is successful.");';
    echo 'window.location="../index.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Warning! An unexpected error occured! Please try again.");';
    echo 'window.location="../index.php";';
    echo '</script>';
}
?>

<?php
mysqli_close($connection);
?>
