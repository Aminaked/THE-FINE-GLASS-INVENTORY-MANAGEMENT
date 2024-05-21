<?php
include 'connection.php';


$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['username'] = $user;
    header("Location: ../views/HomePage.php");
} else {
    echo "User name or password is incorrect";
}

$conn->close();
?>