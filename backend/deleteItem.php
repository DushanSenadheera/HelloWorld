<?php

session_start();
$name = $_SESSION['username'];
$id = $_SESSION['userID'];

require '../connection/connection.php';

$drug = $_POST['drug'];

$sql = "DELETE FROM pdinventry WHERE drug='$drug' and password='$password'";

if ($conn->query($sql) === TRUE) {
  header("Location: ../login.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>