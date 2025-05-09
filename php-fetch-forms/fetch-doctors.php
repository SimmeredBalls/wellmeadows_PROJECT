<?php

// Database connection (update credentials as needed for PostgreSQL)
$host = "localhost"; // Or your PostgreSQL host
$port = "5432";    // Default PostgreSQL port
$dbname = "dbhospitaladmin";
$user = "your_postgres_user"; // Replace with your PostgreSQL username
$password = "your_postgres_password"; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Create connection to PostgreSQL
$conn = pg_connect($conn_string);

// Check connection
if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

// Query to fetch doctor data
$sql = "SELECT clinic_num, first_name, last_name, address, phone_num FROM localdoctors";
$result = pg_query($conn, $sql);

$doctors = [];
if ($result) {
    $num_rows = pg_num_rows($result);
    if ($num_rows > 0) {
        while ($row = pg_fetch_assoc($result)) {
            $doctors[] = $row;
        }
    }
    pg_free_result($result);
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($doctors);

// Close connection
pg_close($conn);
?>