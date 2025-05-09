<?php
// Database connection details for PostgreSQL
$host = 'localhost'; // Or your PostgreSQL host
$port = '5432';    // Default PostgreSQL port
$dbname = 'dbhospitaladmin';
$user = 'your_postgres_user'; // Replace with your PostgreSQL username
$password = 'your_postgres_password'; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Connect to the database
$db = pg_connect($conn_string);

if (!$db) {
    error_log("Database connection failed: " . pg_last_error());
    die("Database connection failed: " . pg_last_error());
}

// Get supply type and sort column from query parameters
$type = $_GET['type'] ?? '';
$sortBy = $_GET['sort'] ?? '';

// Determine which table to query
$table = '';
switch ($type) {
    case 'pharmaceutical':
        $table = 'pharmaceutical_supplies';
        break;
    case 'surgical':
        $table = 'surgical_supplies';
        break;
    case 'non-surgical':
        $table = 'non_surgical_supplies';
        break;
    default:
        echo json_encode([]);
        pg_close($db);
        exit;
}

// Default query
$query = "SELECT * FROM \"$table\""; // Enclose table name in double quotes

// Apply sorting if a sort column is provided
if ($sortBy) {
    $query .= " ORDER BY \"$sortBy\""; // Enclose sort column in double quotes
}

$result = pg_query($db, $query);

$supplies = [];
if ($result) {
    while ($row = pg_fetch_assoc($result)) {
        $supplies[] = $row;
    }
    pg_free_result($result);
}

echo json_encode($supplies);
pg_close($db);
?>