<?php
session_start();
require 'db.php';

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';
$action = $_POST['action'] ?? '';

if ($action == 'register') {
    // Check if user exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);
    if ($stmt->rowCount() > 0) {
        echo "User already exists. <a href='index.php'>Back</a>";
        exit;
    }

    // Insert user
    $stmt = $pdo->prepare("INSERT INTO users (username, password, role) VALUES (?, ?, ?)");
    $stmt->execute([$username, $password, $role]);
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $role;
    header("Location: dashboard.php");
    exit;
}

if ($action == 'login') {
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if (!$user) {
        echo "Invalid credentials. <a href='index.php'>Back</a>";
        exit;
    }

    $_SESSION['user'] = $user['username'];
    $_SESSION['role'] = $user['role'];
    header("Location: dashboard.php");
    exit;
}
?>
