<?php
include "idbconnect.php";

	$id = $_POST['id'];
	$name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
	$send_money = $_POST["send_money"];
    





$sql = "UPDATE crud SET name='$name', email='$email', phone='$phone', send_money='$send_money' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: i_list.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();



?>