
<?php

include 'connection.php';

$sql = "SELECT id, username FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['username']}</td>
                <td>
                    <!--<form action='../controllers/updateuser.php' method='post' style='display:inline;'>
                    <input type='hidden' name='edit_user' value='1'>
                    <input type='hidden' name='user_id' value='{$row['id']}'>
                        <input type='submit' value='Edit'>
                    </form>-->
                    <form action='../controllers/DeleteUser.php' method='post' style='display:inline;'>
                    <input type='hidden' name='delete_user' value='1'>
                        <input type='hidden' name='user_id' value='{$row['id']}'>
                        <input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this user?\");'>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='3'>No users found</td></tr>";
}

$conn->close();
?>