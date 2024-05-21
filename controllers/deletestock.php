<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_stock'])) {
    $stockId = $_POST['stock_id'];

    
    $sql = "DELETE FROM stocks WHERE id = $stockId";

   
    if ($conn->query($sql) === TRUE) {
        echo "Stock deleted successfully";
      header("location: ../views/StockManagementPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>