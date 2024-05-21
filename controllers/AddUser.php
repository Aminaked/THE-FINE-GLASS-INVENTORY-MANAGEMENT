<?php

include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

   
    if ($conn->query($sql) === TRUE) {
        echo "User added successfully";
        header("location: ../views/UserManagementPage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    $conn->close();

?>