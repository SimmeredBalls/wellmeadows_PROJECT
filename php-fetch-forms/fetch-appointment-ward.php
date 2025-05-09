<?php

// Database credentials for PostgreSQL
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
    die(json_encode(["message" => "Database connection failed.", "error" => pg_last_error()]));
}

// Fetch wards from the wards table
$sql = "SELECT ward_num, ward_name FROM wards";
$result = pg_query($conn, $sql);

if ($result) {
    $wards = pg_fetch_all($result);
    echo json_encode($wards);
    pg_free_result($result);
} else {
    echo json_encode([]);
}

pg_close($conn);

?>