<?php

session_start();
require '../connection/connection.php';

$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM user where pname = '$username' && password = '$password'";
$result = $conn->query($sql);
$final = $result->fetch_assoc();

if ($final['pname'] == $username && $final['password'] == $password) {
    $_SESSION['username'] = $username;
    $_SESSION['userID'] = $final['userID'];
    header("Location: ../index.php");
} else {
    header("Location: ../signin.php");
}

$conn->close();

?>