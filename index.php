<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRC Enrollment Page - Enroll Now</title>
    <!-- Updated Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/layout.css">
    <style>
       
    </style>
</head>
<body>

    <?php include 'includes/header.php'; ?> <!-- Include the header here -->
<br><br><br>
    <div class="container">
        <div class="message-container">
            <h2>
                <span class="highlight">S</span>trive for Excellence
                <span class="highlight">R</span>ise with Resilience
                <span class="highlight">C</span>reate a Legacy
            </h2>
        </div>

        <div class="enroll-container">
            <a href="admission.php" class="enroll-button">
                <img src="assets/img/enroll.png" alt="Enroll Now" style="width: 300px; height: auto;"> <!-- Enroll Now image -->
            </a>
        </div>
    
        <h2 class="program-title" id="acadtitle">Our Academic Programs for College</h2> <!-- Styled Title for Academic Programs -->

        <hr style="border: 1px solid #2A3E5E; margin: 20px 0;"> <!-- Separator line -->

        <div class="container"> <!-- Main container for all academic programs -->
            <div class="row justify-content-center"> <!-- Center the row content -->
                <div class="col-md-4">
                    <div class="academic-container"> <!-- Container for Bachelor of Science in Accounting Information System -->
                        <h3>Bachelor of Science in Accounting Information System</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="academic-container"> <!-- Container for Bachelor of Science in Entrepreneurship -->
                        <h3>Bachelor of Science in Entrepreneurship</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="academic-container"> <!-- Container for Bachelor of Science in Information System -->
                        <h3>Bachelor of Science in Information System</h3>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="academic-container"> <!-- Container for Bachelor of Elementary Education -->
                        <h3>Bachelor of Elementary Education</h3>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="academic-container"> <!-- Container for Bachelor of Secondary Education -->
                        <h3>Bachelor of Secondary Education</h3>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="program-title" id="aboutus">About Us</h2> <!-- Styled Title for About Us -->   
        <hr style="border: 1px solid #2A3E5E; margin: 20px 0;"> 
        
        <div class="row justify-content-center"> <!-- Row for Philosophy, Vision, and Mission -->
            <div class="col-md-3 academic-container"> <!-- Container for Philosophy -->
                <h3><span class="highlight">P</span>hilosophy</h3>
                <p>We believe that education is transforming God-Centered individuals in a nurturing learning environment</p>
            </div>

            <div class="col-md-3 academic-container"> <!-- Container for Vision -->
                <h3><span class="highlight">V</span>ision</h3>
                <p>A Center of Exellence dedicated to the transformation of individuals for the service of God and Humanity</p>
            </div>

            <div class="col-md-3 academic-container"> <!-- Container for Mission -->
                <h3><span class="highlight">M</span>ission</h3>
                <p>We are dedicated to develop and nurture individuals who are:</p>
            </div>
        </div>

        <div class="academic-container"> <!-- Container for Meaning of SRC -->
            <h3>SRC</h3>
            <p>
                <span class="highlight">S</span>tewards of God's creation and of Christian faith; <h1></h1>
                <span class="highlight">R</span>esponsible leaders and citizens with passion to serve God and Humanity; <h1></h1>
                <span class="highlight">C</span>ommitted to academic excellence.
            </p>
        </div>

        <div class="academic-container centered-container"> <!-- Centered and smaller container for SRC Core Values -->
            <h3>SRC Core Values</h3>
            <p>Our core values include:</p>
            <ul>
                <li>Professionalism</li>
                <li>Accountability</li>
                <li>Transparency</li>
                <li>Responsibility</li>
                <li>Servitude</li>
                <li>Adaptability</li>
            </ul>
        </div>
        
    </div>
<br>
<br>
<br>
<br>
   <?php include 'includes/footer.php'; ?>

    <!-- Updated Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
