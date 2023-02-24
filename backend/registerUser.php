<?php

require '../connection/connection.php';

$pname = $_POST['pname'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$license = $_POST['license'];
$password = $_POST['password'];

$hashed_password = '$2y$10$At5kc5ueFXvXpA7xG5eE1eSZ6ItcB6H7if3qZwQ2fuSTjr5y/6d7m';
if (password_verify($password, $hashed_password)) {
    echo "Password is valid!";
} else {
    echo "Invalid password.";
}

$sql = "INSERT INTO user (pname, email, address, mobile,license, password)
VALUES ('$pname', '$email', '$address', '$mobile', '$license', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../PhamacyDashboardinventory.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>