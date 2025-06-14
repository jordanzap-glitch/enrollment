<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page - Enroll Now</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            position: relative;
            min-height: 100vh; /* Full height of the viewport */
            overflow: hidden; /* Prevents scrolling */
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('assets/img/srcback.jpg') no-repeat center center fixed;
            background-size: cover;
            opacity: 0.3; /* Set opacity to 30% */
            z-index: -1; /* Place it behind other content */
        }

        .enroll-button {
            position: relative;
            z-index: 1; /* Ensure button is above the background */
            background-color: #2A3E5E; /* Button color */
            color: #fff; /* Text color */
            border: none; /* Remove border */
            padding: 10px 20px; /* Padding for the button */
            font-size: 1.2rem; /* Font size */
            transition: background-color 0.3s; /* Smooth transition for hover effect */
        }

        .enroll-button:hover {
            background-color: #F7C230; /* Hover color */
            color: #2A3E5E; /* Change text color on hover */
        }
    </style>
</head>
<body>

    <?php include 'includes/header.php'; ?> <!-- Include the header here -->

    <div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
        <a href="enroll.php" class="btn btn-primary">Enroll Now</a> <!-- Enroll Now button -->
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
