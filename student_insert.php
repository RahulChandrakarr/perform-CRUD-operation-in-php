<?php
require("connection.php");
// Get form data
$name = $_POST['name']; // Assuming 'name' is the name attribute of the input field for name
$email = $_POST['email']; // Assuming 'email' is the name attribute of the input field for email
$phone = $_POST['phone']; // Assuming 'phone' is the name attribute of the input field for phone
$address = $_POST['address']; // Assuming 'address' is the name attribute of the input field for address

// Insert data into users table
$sql = "INSERT INTO users (name, email, phone, address) VALUES ('$name', '$email', '$phone', '$address')";
if ($conn->query($sql) === TRUE) {
    header("Location: student_report.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
