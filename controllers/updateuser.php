<?php
include 'connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit_user'])){
$id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "UPDATE users 
SET username = '$username', 
password = '$password', 
WHERE id = $id";

if ($conn->query($sql) === TRUE) {

    header("location: ../views/UserManagementPage.php");
} else {
    echo "Error updating record: " . $conn->error;
}}