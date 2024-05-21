<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['product_name'];
    $price = $_POST['product_price'];

    $sql = "INSERT INTO products (name, price) VALUES ('$product', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "product added successfully";
        header("location: ../views/ProductManagementPage.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

