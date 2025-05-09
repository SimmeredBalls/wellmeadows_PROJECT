<?php
// Start the session to access the logged-in user's details
session_start();

// Check if the user is logged in by checking if the session variable exists
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

// Get the logged-in username from the session
$username = $_SESSION['username'];
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellmeadows Hospital</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <!-- Nav bar component -->
    <?php include '../components/navbar.php'; ?>

    <div class="message-container">
        <div class="welcome-message">
            <p>
                <p id="title-name">Welcome back, <span><?php echo htmlspecialchars($username); ?>,</span></p><br><br>

                <p id="title-welcome">Welcome to Wellmeadows Hospital.</p><br><br>

                <p id="message">
                    At Wellmeadows, we’re committed to ensuring that patient care and efficient operations are always our top priorities. Our hospital’s management system is designed to support you in organizing appointments, coordinating resources, and providing seamless patient care. This platform allows you to easily access essential tools and information, so you can focus on delivering the best experience to our patients.

                    Please navigate through the options above to access the resources you need. Thank you for being part of our dedication to compassionate and effective healthcare.
                </p>
            </p>
        </div>
    </div>
    
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script> -->
</body>

</html>
