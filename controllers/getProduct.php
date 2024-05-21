<?php
// Database connection
include 'connection.php';

$sql = "SELECT id, name, price FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['price']}</td>
                <td>
                   <!-- <form action='edit_product.php' method='post' style='display:inline;'>
                        <input type='hidden' name='product_id' value='{$row['id']}'>
                        <input type='submit' value='Edit'>
                    </form>-->
                    <form action='../controllers/DeleteProduct.php' method='post' style='display:inline;'>
                    <input type='hidden' name='delete_product' value='1'>
                        <input type='hidden' name='product_id' value='{$row['id']}'>
                        <input type='submit' value='Delete' onclick='return confirm(\"Are you sure you want to delete this product?\");'>
                    </form>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No products found</td></tr>";
}

$conn->close();
?>
