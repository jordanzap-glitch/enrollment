<?php
// Start the session if you want to use session variables (optional)
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Enrolling</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <style>
        .thank-you-container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-top: 50px;
        }
        h2 {
            color: #2A3E5E;
        }
        .btn {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<div class="container">
    <div class="thank-you-container">
        <h2>Thank You for Enrolling!</h2>
        <p>Your enrollment has been successfully submitted. We appreciate your interest and look forward to seeing you soon!</p>
        <a href="admission.php" class="btn btn-primary">Fill Up the Form Again</a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br>
<?php include 'includes/footer.php'; ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
