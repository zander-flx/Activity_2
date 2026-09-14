<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <?php if (isset($_GET['error'])) echo "<p style='color:red;'>Invalid credentials</p>"; ?>
    <form action="process.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <br>z
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>   

</body>
</html>