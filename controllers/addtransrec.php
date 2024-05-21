<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['transfer_product'];
    $quantity = $_POST['transfer_quantity'];
    $destination= $_post['transfer_location'];

    $sql = "INSERT INTO transfer (product, quantity,destination) VALUES ('$product', '$quantity','$destination)";

    if ($conn->query($sql) === TRUE) {
        echo "transfer record added successfully";
       header("location: ../views/TransferManagementPage.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

