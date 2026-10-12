<?php
session_start();
$isActive = ($_SESSION['isActive'] ?? false);

if ($isActive) {
    if($_SESSION['role'] == 'admin') {
        header('location: admin.php');
    } else {
        header('location: cashier.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" co
    ntent="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="process.php" method="post">
            <?php
                echo isset($_SESSION['msg']);
                echo "<br>";
            ?>
        Username:
        <input type="text" name="username">
        Password:
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>