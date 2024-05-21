<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer - The Fine Glass</title>
    <link rel="stylesheet" href="../public/styles/TransferPage.css">
</head>
<body>
    <header>
        <nav>
        <h1>Stock Transfer</h1>
        <a href="HomePage.php"><button>Back</button></a>
        </nav>
       
    </header>
    <main>
        <form class="form" action="transfer.php" method="post">
            <label class="label" for="transfer_product">Product:</label>
            <input class="input" type="text" id="transfer_product" name="transfer_product" required>
            <br>
            <label class="label" for="transfer_quantity">Quantity:</label>
            <input class="input" type="number" id="transfer_quantity" name="transfer_quantity" required>
            <br>
            <label class="label" for="transfer_location">Destination:</label>
            <input class="input" type="text" id="transfer_location" name="transfer_location" required>
            <br>
            <input class="input" type="submit" value="Record Transfer">
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Destination</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                include '../controllers/gettransrec.php';
                ?>
            </tbody>
            </table>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>
</html>
