<?php
include "idbconnect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
	$send_money = $_POST["send_money"];
   
    $sql ="INSERT INTO crud (id, name, email, phone, send_money) VALUES (NULL, '$name', '$email', '$phone', '$send_money')";
    
   
    if ($conn->query($sql) === TRUE) {
        
        header("Location: i_list.php");
        exit(); 
    } else {
        echo "<h3>Data not inserted</h3>";
        
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
