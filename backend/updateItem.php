<?php

session_start();
$name = $_SESSION['username'];
$id = $_SESSION['userID'];

require '../connection/connection.php';

$id = $_POST['id'];
$manufacturer = $_POST['manufacturer'];
$supplier = $_POST['supplier'];
$ndc = $_POST['ndc'];
$expiration = $_POST['expiration'];
$quantityonhand = $_POST['quantityonhand'];
$unitprice = $_POST['unitprice'];


$sql = "UPDATE user SET lname='$lname' WHERE userID='$id'";

if (mysqli_query($conn, $sql)) {
  header("Location: ../index.php");
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);

?>