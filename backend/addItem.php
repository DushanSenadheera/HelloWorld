<?php

require '../connection/connection.php';

$drug = $_POST['drug'];
$manufacturer = $_POST['manufacturer'];
$supplier = $_POST['supplier'];
$ndc = $_POST['ndc'];
$expiration = $_POST['expiration'];
$quantityonhand = $_POST['quantityonhand'];
$unitprice = $_POST['unitprice'];


$sql = "INSERT INTO pdinventry (drug, manufacturer, supplier, ndc, expiration, quantityonhand, unitprice)
VALUES ('$drug', '$manufacturer', '$supplier', '$ndc', '$expiration', '$quantityonhand', '$unitprice')";

if ($conn->query($sql) === TRUE) {
    header("Location: ../PhamacyDashboardInventory.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>