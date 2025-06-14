<?php
session_start(); // Start the session
include "../includes/db.php"; // Include database connection

$message = ""; // Initialize message variable

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare SQL statement to prevent SQL injection
    $sql = "SELECT * FROM tbl_user WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password); // Bind parameters

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user was found
    if ($result->num_rows > 0) {
        // User found, set session variable
        $_SESSION['admin_logged_in'] = true;
        header("Location: dashboard.php"); // Redirect to admin dashboard
        exit();
    } else {
        $message = "Invalid username or password."; // Set error message
    }

    $stmt->close(); // Close the statement
    $conn->close(); // Close the database connection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <style>
        .login-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            margin-top: 100px;
        }
        h2 {
            color: #2A3E5E;
            margin-bottom: 20px;
            text-align: center;
        }
        .message {
            margin-bottom: 20px;
            color: red; /* Change color as needed */
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-container">
        <h2>Admin Login</h2>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
