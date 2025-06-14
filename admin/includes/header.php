<?php
session_start(); // Start the session

// Check if the admin is logged in

// Get the admin's username (assuming it's stored in the session)
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Admin';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .header {
            background-color: #2A3E5E;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .logout-link {
            color: white;
            float: right;
            margin-top: -40px; /* Adjust to position the logout link */
            margin-right: 20px;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <a href="logout.php" class="logout-link">Logout</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
