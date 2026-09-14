<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['role'] = 'admin';
        header("Location: admin.php");
        exit();
    } 
    elseif ($username === 'cashier' && $password === 'cashier') {
        $_SESSION['role'] = 'cashier';
        header("Location: cashier.php");
        exit();
    } 
    else {
        header("Location: login.php?error=1");
        exit();
    }
    ?>  
</body>
</html>