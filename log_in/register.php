<?php
include('../includes/db_connection.php');
include('../includes/header.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];

    // Check if username already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "❌ Username already taken! Please choose another.";
        $stmt->close();
    } else {
        $stmt->close();

        // Hash the password
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into database
        $role = 'reader'; // Default role for new users
        $stmt = $conn->prepare("INSERT INTO users (username, password_hash, role) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $password_hash, $role);

        if ($stmt->execute()) {
            echo "✅ Registration successful! You can now log in.";
        } else {
            echo "❌ Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
</head>
<body>
<h2>Register</h2>
<form action="register.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br>
    <input type="checkbox" id="show_passwords">
    <label for="show_passwords">Show passwords</label><br>
    <button type="submit">Register</button>
</form>

<p>Already have an account? <a href="login.php">Log in here</a></p>
</body>
</html>

<?php include('../includes/footer.php'); ?>