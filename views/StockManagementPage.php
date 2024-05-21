<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Management - The Fine Glass</title>
    <link rel="stylesheet" href="../public/styles/StockManagementPage.css">
</head>
<body>
    <header>
        
        <nav>
        <h1>Stock Management</h1>
         
                <a href="HomePage.php"><button> Back</button></a>
                
          
        </nav>
    </header>
    <main>
        <h3>Add stock</h3>
        <form id="form" action="../controllers/addstock.php" method="post">
            <label class="label" for="stock_product">Produit:</label>
            <input class="input" type="text" id="stock_product" name="stock_product" required>
            <br>
            <label class="label" for="stock_quantity">Quantité:</label>
            <input class="input" type="number" id="stock_quantity" name="stock_quantity" required>
            <br>
            <input class="input" type="submit" value="add Stock">
        </form>

        <h3>List of stocks</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
          
                <?php
                
                include '../controllers/getstock.php';
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>
</html>