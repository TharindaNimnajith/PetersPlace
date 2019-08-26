<?php
require_once('connection.php');
?>

<?php
$roomNo = $_POST['r_no'];
$roomType = $_POST['roomtype'];
$floor = $_POST['floor'];
$description = $_POST['desc'];

$query = "INSERT INTO room (room_no, floor, description, type_id) VALUES ('{$roomNo}', '{$floor}', '{$description}', '{$roomType}')";
?>

<?php
if (mysqli_query($connection, $query)) {
    echo '<script type="text/javascript">';
    echo 'alert("New room added successfuly!");';
    echo 'window.location="../room_management.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Warning! An unexpected error occured! Please try again.");';
    echo 'window.location="../room_management.php";';
    echo '</script>';
}
?>

<?php
mysqli_close($connection);
?>
