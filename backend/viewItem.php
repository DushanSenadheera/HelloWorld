<?php

$name = $_SESSION['username'];

require 'connection/connection.php';

$sql = "SELECT * FROM pdinventry where id = '$id'";
$result = $conn->query($sql);
$final = $result->fetch_assoc();

$id = $final['id'];
$drug = $final['drug'];
$manufacturer = $_POST['manufacturer'];
$supplier = $_POST['supplier'];
$ndc = $_POST['ndc'];
$expiration = $_POST['expiration'];
$quantityonhand = $_POST['quantityonhand'];
$unitprice = $_POST['unitprice'];


$conn->close();

?>