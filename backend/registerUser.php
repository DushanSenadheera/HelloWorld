<?php

require '../connection/connection.php';

$pname = $_POST['pname'];
$email = $_POST['email'];
$address = $_POST['address'];
$mobile = $_POST['mobile'];
$license = $_POST['p-license-no'];
$password = $_POST['password'];


$sql = "INSERT INTO user (pname, email, address, mobile, license, password)
VALUES ('$pname', '$email', '$address', '$mobile', '$license', '$password')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../login.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>