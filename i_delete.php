<?php
include "idbconnect.php";

$id = $_GET['delid'];


$sql = "DELETE FROM crud WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "The record has been deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

header("Location: i_list.php");
exit();
?>