<?php


include 'connection.php';

$sql = "SELECT id, product, quantity ,unit_price,reception_date FROM reception";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['product']}</td>
                <td>{$row['quantity']}</td>
                <td>{$row['unit_price']}</td>
                <td>{$row['reception_date']}</td>
                <td>
                                <form action='../controllers/deleterec.php' method='post'>
                                <input type='hidden' name='delete_rec' value='1'>
                                <input type='hidden' name='rec_id' value='{$row['id']}'>
                                <input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this product?\");'>
                                </form>
                            </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='5'>No reception record found</td></tr>";
}

$conn->close();
?>
