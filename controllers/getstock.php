<?php


include 'connection.php';

$sql = "SELECT id, product, quantity FROM stocks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['product']}</td>
                <td>{$row['quantity']}</td>
                <td>
                    <form  action='../controllers/deletestock.php' method='post' style='display:inline;'>
                        <input type='hidden' name='delete_stock' value='1'>
                        <input type='hidden' name='stock_id' value='{$row['id']}'>
                        <input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this product?\");'>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No stocks found</td></tr>";
}

$conn->close();
?>
