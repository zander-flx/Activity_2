<?php
session_start();

$uname = $_POST['username'];
$pwd = $_POST['password'];
$msg = "";
if ($uname == 'admin' && $pwd == 'admin') {
    $_SESSION['user'] = 'Jose Rizal';
    $_SESSION['isActive'] = true;
    $_SESSION['role'] = 'admin';
    header('location: admin.php');
} else if ($uname == 'cashier' && $pwd == 'cashier') {
    $_SESSION['user'] = 'Andres Bonifacio';
    $_SESSION['isActive'] = true;
    $_SESSION['role'] = 'cashier';
    header('location: cashier.php');
} else {
    $_SESSION['msg'] = "Invalid username/password";
    $_SESSION['isActive'] = false;
    $_SESSION['role'] = null;
    header('location: login.php');
}
?>