<?php
require_once('connection.php');
?>

<?php
$type_id = $_POST['t_id'];
$type_name = $_POST['t_name'];
$price = $_POST['price'];
$description = $_POST['desc'];

$query = "INSERT INTO room_type (t_id, name, description, base_price) VALUES ('{$type_id}', '{$type_name}', '{$description}', '{$price}')";
?>

<?php
if (mysqli_query($connection, $query)) {
    echo '<script type="text/javascript">';
    echo 'alert("New reservation added successfuly!");';
    echo 'window.location="../room_reservation_management.php";';
    echo '</script>';
} else {
    echo '<script type="text/javascript">';
    echo 'alert("Warning! An unexpected error occured! Please try again.");';
    echo 'window.location="../room_reservation_management.php";';
    echo '</script>';
}
?>

<?php
mysqli_close($connection);
?>
