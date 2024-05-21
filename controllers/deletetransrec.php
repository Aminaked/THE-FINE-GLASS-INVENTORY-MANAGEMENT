<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_record'])) {
    $recordId = $_POST['record_id'];

   
    $sql = "DELETE FROM transfer WHERE id = $recordId";

  
    if ($conn->query($sql) === TRUE) {
        echo "record deleted successfully";
        header("location: ../views/TransferManagementPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
