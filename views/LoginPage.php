<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/styles/loginPage.css">
    <title>Login -THE FINE GLASS</title>
</head>

<body>
    <header>>
    <nav>
    
    <!--<img src="../Public/Images/logo_blue.png" alt="logo" />-->
      <h1 id="fg">The Fine Glass</h1>
      <a href="landing.php"><button>Back</button></a>
 
    </nav>
    
    </header>
    <main>
      <form action="../controllers/login.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button>login</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>

</html>




