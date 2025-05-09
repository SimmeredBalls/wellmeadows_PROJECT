<?php
session_start(); 

// PostgreSQL connection credentials
$host = "localhost";
$port = "5432";
$dbname = "dbhospitaladmin";
$user = "your_pg_username";       // Replace with your PostgreSQL username
$password = "your_pg_password";   // Replace with your PostgreSQL password

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $passwordInput = $_POST['password'];

    // Query to check if the user exists
    $sql = "SELECT * FROM users WHERE username = $1";
    $result = pg_query_params($conn, $sql, array($username));

    if (pg_num_rows($result) > 0) {
        $user = pg_fetch_assoc($result);

        // Verify the password
        if (password_verify($passwordInput, $user['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $user['id'];
            header("Location: homepage.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "Invalid username or password.";
    }
}

pg_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellmeadow's Hospital</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="login-wrapper">
        <div class="logo-container">
            <div class="logo-s">
                <img src="../images/logo.jpg" alt="logo-icon">
            </div>
        </div>
        <h1 id="login-title">Wellmeadow's Hospital</h1>

        <div class="container">
            <div class="login-container">
                <form action="login.php" method="post" class="login-form">
                    <label for="username">Username</label>
                    <input id="username" class="inner-input" type="text" name="username" required />
                    
                    <label for="password">Password</label>
                    <input id="password" class="inner-input" type="password" name="password" required />

                    <!-- Display error message if login fails -->
                    <?php if (isset($error)): ?>
                        <p style="color: red;"><?php echo $error; ?></p>
                    <?php endif; ?>

                    <button type="submit" name="Submit" class="login-btn">Log In</button>
                </form>
            </div>
            <div class="bottom-container">
                <p>Don't have an account? <span><a href="signup.php">Sign Up.</a></span></p>
            </div>
        </div>
    </div>
</body>
</html>
