<?php
include_once("connection.php");

if (isset($_POST['deleteid'])) {
    $userid = $_POST['deleteid'];
    $sql1 = "DELETE FROM `student` WHERE `student`.`seatno` = '$userid'";

    if (mysqli_query($conn, $sql1)) {
        // Data deleted successfully
        echo "success";
    } else {
        // Error in deletion
        echo "error";
    }
}
?>
