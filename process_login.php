<?php
session_start();

$admin_username = 'hana';
$admin_password = 'hana';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $admin_username && $password === $admin_password) {
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit;
    } else {
        header('Location: login.php?error=Invalid credentials');
        exit;
    }
}
?>
