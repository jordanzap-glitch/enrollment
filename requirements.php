<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollment Requirements</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <style>
        h2 {
            color: #2A3E5E;
            margin-top: 30px;
            text-align: center;
        }
        .requirement-list {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?> 
    <div class="container">
        <h1 class="text-center" style="color: #2A3E5E;">Admission Requirements</h1>


        <div class="requirement-list">
            <h2>Freshmen</h2>
            <ol>
                <li>3 photocopies of PSA Birth Certificate</li>
                <li>Original copy of Form 138-B (Report Card)</li>
                <li>Original copy of Permanent Record (Form 137-A)</li>
                <li>Photocopy of authenticated Marriage Certificate (if married)</li>
                <li>Certificate of Good Moral Character</li>
                <li>College Admission Test Results</li>
                <li>Certificate of Residency</li>
                <li>Interview by the Dean</li>
                <li>2 pieces 2x2 picture (white background with name tag)</li>
            </ol>
        </div>

        <div class="requirement-list">
            <h2>Old Student</h2>
            <ol>
                <li>Complete signed clearance</li>
                <li>2 pieces 2x2 picture (white background with name tag)</li>
            </ol>
        </div>

        <div class="requirement-list">
            <h2>Transferees</h2>
            <ol>
                <li>2 pieces 2x2 picture (white background with name tag)</li>
                <li>3 photocopies of PSA Birth Certificate</li>
                <li>Honorable Dismissal</li>
                <li>Transcript of Records</li>
                <li>Certificate of Good Moral Character</li>
                <li>An interview from the Dean</li>
            </ol>
        </div>

        <div class="requirement-list">
            <h2>Returnees</h2>
            <ol>
                <li>Apply for Return to Study to the College.</li>
                <li>Attach a copy of the Student's Evaluation Record secured at the Office of the Registrar to the Application Form for Returning Student.</li>
                <li>Complete Signed Clearance</li>
            </ol>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
