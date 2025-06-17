<?php
session_start();

$users = $_SESSION['users'] ?? [];

// Get form data
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';
$action = $_POST['action'] ?? '';

// Simulate user store in session
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

// Register user
if ($action == "register") {
    if (isset($users[$username])) {
        echo "User already exists. <a href='index.php'>Back</a>";
        exit;
    }
    $_SESSION['users'][$username] = [
        'password' => $password,
        'role' => $role
    ];
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $role;
    header("Location: dashboard.php");
    exit;
}

// Login user
if ($action == "login") {
    if (!isset($users[$username]) || $users[$username]['password'] != $password) {
        echo "Invalid credentials. <a href='index.php'>Back</a>";
        exit;
    }
    $_SESSION['user'] = $username;
    $_SESSION['role'] = $users[$username]['role'];
    header("Location: dashboard.php");
    exit;
}
?>
