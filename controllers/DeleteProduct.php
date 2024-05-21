<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_product'])) {
    $productId = $_POST['product_id'];


$sql = "DELETE FROM products WHERE id= $productId";


if ($conn->query($sql) === TRUE) {
    header("Location: ../views/ProductManagementPage.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$conn->close();
?>