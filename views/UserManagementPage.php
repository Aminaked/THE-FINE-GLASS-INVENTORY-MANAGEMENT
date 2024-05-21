<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - The Fine Glass</title>
    <link rel="stylesheet" href="../public/styles/UserManagementPage.css">
</head>
<body>
    <header>
        <nav>
        <div>
        <h1>User Management</h1>
        </div>
            
        <div>
             <a href="HomePage.php"><button>back</button></a>
        </div>
             
       </nav>
       
    </header>
    <main>
        <h3>Add a new user</h3>
        <form id="form" action="../controllers/AddUser.php" method="post">
            <label class="label" for="username">Username:</label>
            <input class="input" type="text" id="username" name="username" required>
            <br>
            <label class="label" for="password">Password:</label>
            <input class="input" type="password" id="password" name="password" required>
            <br>
            <input class="input" type="submit" value="add user">
        </form>
        
      
        <h3>Existing Users</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody >
              
               
                <?php
                
                include '../controllers/getUser.php';
                ?>

        </table>
    </main>
    <footer>
        <p>&copy; 2024 The Fine Glass. All rights reserved.</p>
    </footer>
</body>
</html>
