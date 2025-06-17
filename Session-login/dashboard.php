<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

$user = $_SESSION['user'];
$role = $_SESSION['role'];

function showMessage($role) {
    switch ($role) {
        case 'admin':
            return "Welcome Admin! You have full access.";
        case 'user':
            return "Welcome Regular User! Limited access granted.";
        case 'guest':
            return "Welcome Guest! View-only access.";
        case 'superuser':
            return "Hello Super User! You have super privileges.";
        default:
            return "Unknown role.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial; background: #e6f2ff; padding: 30px; text-align: center; }
        .box { background: white; padding: 20px; display: inline-block; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        a { text-decoration: none; color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="box">
        <h2>Hello, <?= htmlspecialchars($user) ?> (<?= htmlspecialchars($role) ?>)</h2>
        <p><?= showMessage($role) ?></p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
