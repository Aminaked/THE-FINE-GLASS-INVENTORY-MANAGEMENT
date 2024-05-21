<?php


include 'connection.php';

$sql = "SELECT id, product, quantity ,destination FROM transfer";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['product']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['destination']}</td>
                <td>
                                <form action='deleteRecord.php' method='post'>
                                <input type='hidden' name='delete_record' value='1'>
                                <input type='hidden' name='record_id' value='{$row['id']}'>
                                    <input type='submit' value='Delete'>
                                </form>
                            </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No trans record found</td></tr>";
}

$conn->close();
?>
