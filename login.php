<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="box">
        <h2>Login</h2>
        
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Invalid username or password!</p>';
        }
        ?>

        <form action="process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>

        <div class="info">
            <strong>Test Credentials:</strong><br>
            Admin: admin / admin<br>
            Cashier: cashier / cashier
        </div>
    </div>
</body>
</html>