<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_user'])) {
    $userId = $_POST['user_id'];

   
    $sql = "DELETE FROM users WHERE id = $userId";

  
    if ($conn->query($sql) === TRUE) {
        echo "User deleted successfully";
        header("location: ..views/UserManagementPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
