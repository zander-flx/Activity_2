<?php
session_start();
$isActive = ($_SESSION['isActive'] ?? false);
$role = $_SESSION['role'];

if ($isActive && $role != 'admin') {
   header('location: login.php');
}

echo "<h1>Welcome Admin!</h1>";
echo "<p>Hello, " . $_SESSION['user'] . "</p>";
?>

<form action="logout.php">
    <input type="submit" value="Logout">
</form>
