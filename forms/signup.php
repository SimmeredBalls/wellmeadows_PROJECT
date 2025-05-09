<?php
session_start();

// PostgreSQL connection settings
$host = "localhost";
$port = "5432";
$dbname = "dbhospitaladmin";
$user = "your_pg_username";       // Replace with your PostgreSQL username
$password = "your_pg_password";   // Replace with your PostgreSQL password

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_username = $_POST['username'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if username already exists
        $check_sql = "SELECT * FROM users WHERE username = $1";
        $check_result = pg_query_params($conn, $check_sql, array($new_username));

        if (pg_num_rows($check_result) > 0) {
            $error = "Username already exists. Please choose a different one.";
        } else {
            // Hash the password
            $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

            // Insert the new user
            $insert_sql = "INSERT INTO users (username, password) VALUES ($1, $2)";
            $insert_result = pg_query_params($conn, $insert_sql, array($new_username, $hashed_password));

            if ($insert_result) {
                $success = "Registration successful! You can now <a href='login.php'>log in</a>.";
            } else {
                $error = "Error during registration. Please try again.";
            }
        }
    }
}

pg_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Wellmeadow's Hospital</title>
    <!-- <link rel="stylesheet" href="../css/styles.css?=v2"> -->
</head>
<body>
    <div class="login-wrapper">
        <div class="logo-container">
            <div class="logo-s">
                <img src="../images/logo.jpg" alt="logo-icon">
            </div>
        </div>
        <h1 id="login-title">Sign Up - Wellmeadow's Hospital</h1>

        <div class="container">
            <div class="login-container">
                <form action="signup.php" method="post" class="login-form">
                    <label for="username">Username</label>
                    <input id="username" class="inner-input" type="text" name="username" required />

                    <label for="password">Password</label>
                    <input id="password" class="inner-input" type="password" name="password" required />

                    <label for="confirm_password">Confirm Password</label>
                    <input id="confirm_password" class="inner-input" type="password" name="confirm_password" required />

                    <?php if (isset($error)): ?>
                        <p style="color: red;"><?php echo $error; ?></p>
                    <?php endif; ?>
                    <?php if (isset($success)): ?>
                        <p style="color: green;"><?php echo $success; ?></p>
                    <?php endif; ?>

                    <button type="submit" name="Submit" class="login-btn">Sign Up</button>
                </form>
            </div>
            <div class="bottom-container">
                <p>Already have an account? <span><a href="login.php">Log In.</a></span></p>
            </div>
        </div>
    </div>
</body>
</html>