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

    $users = [
    'admin' => 'admin',
    'cashier' => 'cashier'
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($users[$username]) && $users[$username] === $password) {
            $_SESSION['username'] = $username;
            $_SESSION['logged_in'] = true;
            
            if ($username === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: cashier.php");
            }
            exit;
        } else {
            header("Location: login.php?error=1");
            exit;
        }
    }
?>   
</body>
</html>