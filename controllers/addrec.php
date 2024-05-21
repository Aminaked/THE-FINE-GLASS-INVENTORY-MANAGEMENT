<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = $_POST['reception_product'];
    $quantity = $_POST['reception_quantity'];
    $unitPrice= $_POST ['reception_price'];
    $date= $_POST['reception_date'];


    $sql = "INSERT INTO reception (product, quantity,unit_price,reception_date) VALUES ('$product', '$quantity','$unitPrice','$date')";

    if ($conn->query($sql) === TRUE) {
        echo "reception record added successfully";
      header("location: ../views/ReceptionPage.php");
    } else {
        echo "Erreur: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

