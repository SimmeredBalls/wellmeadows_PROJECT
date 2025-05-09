<?php
$host = "localhost";
$port = "5432";
$dbname = "dbhospitaladmin";
$user = "your_pg_username";     // Replace with your PostgreSQL username
$password = "your_pg_password"; // Replace with your PostgreSQL password

// Connect to PostgreSQL
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Query to select all users
$sql = "SELECT id, password FROM users";
$result = pg_query($conn, $sql);

// Check if users exist
if (pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        $hashedPassword = password_hash($row['password'], PASSWORD_DEFAULT);
        $userId = $row['id'];

        // Update the password in the database using parameterized query
        $updateSql = "UPDATE users SET password = $1 WHERE id = $2";
        $updateResult = pg_query_params($conn, $updateSql, array($hashedPassword, $userId));

        if (!$updateResult) {
            echo "Error updating user ID $userId: " . pg_last_error($conn) . "\n";
        }
    }
    echo "Passwords updated successfully!";
} else {
    echo "No users found.";
}

pg_close($conn);
?>
