<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Kids Stories</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION["username"]; ?>!</h2>
    <a href="logout.php">Logout</a>

    <div class="story-card">
        <h3>The Curious Cat</h3>
        <p>Once upon a time, a curious cat explored the jungle...</p>
    </div>

    <div class="story-card">
        <h3>The Flying Elephant</h3>
        <p>Ellie the elephant found magic ears that made her fly!</p>
    </div>
</body>
</html>
