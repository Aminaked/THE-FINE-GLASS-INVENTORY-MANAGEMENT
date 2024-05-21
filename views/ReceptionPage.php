<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reception - The Fine Glass</title>
    <link rel="stylesheet" href="../public/styles/ReceptionPage.css">
</head>
<body>
    <header>
        <nav>
        <h1>Goods Reception</h1>
        <a href="HomePage.php"><button>Back</button></a>
        </nav>
       
    </header>
    <main>
        <form id="form" action="../controllers/addrec.php" method="post">
            <label class="label" for="reception_product">Product:</label>
            <input class="input" type="text" id="reception_product" name="reception_product" required>
            <br>
            <label class="label" for="reception_quantity">Quantity:</label>
            <input class="input" type="number" id="reception_quantity" name="reception_quantity" required>
            <br>
            <label class="label" for="reception_price">Unit Price:</label>
            <input class="input" type="text" id="reception_price" name="reception_price" required>
            <br>
            <label class="label" for="reception_date">Reception Date:</label>
            <input  class="input" type="date" id="reception_date" name="reception_date" required>
            <br>
            <input class="input" type="submit" value="Record Reception">
        </form>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>unit price</th>
                    <th>reception date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
                
                include '../controllers/getrec.php';
                ?>
            </tbody>
            </table>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>
</html>
