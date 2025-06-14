<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Santa Rita College of Pampanga</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background: #2A3E5E;
            color: #fff;
            padding: 22px 0;
            box-shadow: 0 4px 12px rgba(23, 64, 139, 0.08);
        }
        .header-logo {
            display: flex;
            align-items: center; /* Center logo vertically */
        }
        .header-logo img {
            height: 56px;
            max-width: 90px;
            width: auto;
            vertical-align: middle;
        }
        .college-name {
            font-size: 2.2rem;
            font-weight: 700;
            letter-spacing: 1px;
            margin-left: 10px; /* Add some space between logo and college name */
        }
        nav a {
            color: #fff;
            text-decoration: none;
            font-size: 1.2rem;
            transition: color 0.2s;
            padding-right: 1.5rem;
        }
        nav a:hover {
            color: #F7C230; /* Change color on hover */
        }
        @media (max-width: 600px) {
            .college-name {
                font-size: 1.5rem; /* Adjusted for mobile */
            }
            nav a {
                font-size: 1rem; /* Smaller font size for mobile */
            }
        }
    </style>
</head>
<body>
    <header class="d-flex align-items-center justify-content-start"> <!-- Changed to justify-content-start -->
        <div class="header-logo">
            <img src="assets/img/srclogo.png" alt="Santa Rita College Logo" />
            <span class="college-name">Santa Rita College of Pampanga</span> <!-- Moved inside header-logo -->
        </div>
        <nav class="d-flex ml-auto"> <!-- Added ml-auto to push nav to the right -->
            <a href="index.php" class="mr-3">Home</a>
            <a href="academics.php" class="mr-3">Academics</a>
            <a href="#contact">Contact Us</a>
        </nav>
    </header>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
