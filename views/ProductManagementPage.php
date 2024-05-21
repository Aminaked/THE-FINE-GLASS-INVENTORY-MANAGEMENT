<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Management - The Fine Glass</title>
    <link rel="stylesheet" href="../public/styles/ProductManagementPage.css">
</head>
<body>
    <header>
    <nav>
        <div>
        <h1>Product Management</h1>
        </div>
            
        <div>
             <a href="HomePage.php"><button>back</button></a>
        </div>
             
       </nav>
    </header>
    <main>
        <h3>Add product</h3>
        <form id="form" action="../controllers/Addproduct.php" method="post">
            <label class="label" for="product_name">Product Name:</label>
            <input class="input" type="text" id="product_name" name="product_name" required>
            <br>
            <label class="label" for="product_price">Price:</label>
            <input class="input" type="text" id="product_price" name="product_price" required>
            <br>
            <input class="input" type="submit" value="add product">
        </form>
        <!-- Add a list of existing products here with options to edit and delete -->
        <h3>Existing Products</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <tr >
                  
                </tr>
                <?php
                // Fetch products from the database and display them
                include '../controllers/getProduct.php';
                ?>
            </tbody>
        </table>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>
</html>
    