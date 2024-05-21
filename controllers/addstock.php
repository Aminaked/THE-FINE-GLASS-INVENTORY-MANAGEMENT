<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['stock_product'];
    $quantity = $_POST['stock_quantity'];

    $sql = "INSERT INTO stocks (product, quantity) VALUES ('$product', '$quantity')";

    if ($conn->query($sql) === TRUE) {
        echo "Stock added successfully";
        header("location: ../views/StockManagementPage.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

