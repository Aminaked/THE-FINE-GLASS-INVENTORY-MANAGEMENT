<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_rec'])) {
    $recId = $_POST['rec_id'];

   
    $sql = "DELETE FROM reception WHERE id = $recId";

  
    if ($conn->query($sql) === TRUE) {
        echo "reception record deleted successfully";
      header("location: ../views/ReceptionPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
