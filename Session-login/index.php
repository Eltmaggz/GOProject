<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login / Register</title>
    <style>
        body { font-family: Arial; background: #f0f0f0; padding: 40px; text-align: center; }
        form { background: white; padding: 20px; display: inline-block; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.2); }
        input, select { margin: 10px; padding: 10px; width: 80%; }
        button { padding: 10px 20px; }
    </style>
</head>
<body>
    <h2>User System (Session Only)</h2>

    <form method="POST" action="auth.php" onsubmit="return validateForm()">
        <input type="text" name="username" id="username" placeholder="Enter Username" required><br>
        <select name="role" id="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="user">Regular User</option>
            <option value="guest">Guest</option>
            <option value="superuser">Super User</option>
        </select><br>
        <input type="password" name="password" id="password" placeholder="Enter Password" required><br>
        <button type="submit" name="action" value="login">Login</button>
        <button type="submit" name="action" value="register">Register</button>
    </form>

    <script>
        function validateForm() {
            let role = document.getElementById('role').value;
            if (!role) {
                alert("Please select a role.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
