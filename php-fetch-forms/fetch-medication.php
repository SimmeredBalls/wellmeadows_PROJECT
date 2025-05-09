<?php
// Enable error reporting (for debugging purposes)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set the content type to JSON
header('Content-Type: application/json');

// Database connection details for PostgreSQL
$host = 'localhost'; // Or your PostgreSQL host
$port = '5432';    // Default PostgreSQL port
$dbname = 'dbhospitaladmin';
$user = 'your_postgres_user'; // Replace with your PostgreSQL username
$password = 'your_postgres_password'; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

try {
    // Create a PostgreSQL connection
    $conn = pg_connect($conn_string);
    if (!$conn) {
        die(json_encode(['error' => 'Connection failed: ' . pg_last_error()]));
    }

    // Fetch pharmaceutical supplies data
    $suppliesResult = pg_query($conn, "SELECT drug_num, drug_name FROM pharmaceutical_supplies");
    if (!$suppliesResult) {
        echo json_encode(['error' => 'Error fetching pharmaceutical supplies: ' . pg_last_error($conn)]);
        pg_close($conn);
        exit;
    }
    $supplies = pg_fetch_all($suppliesResult);
    pg_free_result($suppliesResult);

    // Fetch patient data
    $patientsResult = pg_query($conn, "SELECT patient_num, first_name || ' ' || last_name AS name FROM patients");
    if (!$patientsResult) {
        echo json_encode(['error' => 'Error fetching patients: ' . pg_last_error($conn)]);
        pg_close($conn);
        exit;
    }
    $patients = pg_fetch_all($patientsResult);
    pg_free_result($patientsResult);

    // Return the data as JSON
    echo json_encode([
        'patients' => $patients,
        'supplies' => $supplies
    ]);

    pg_close($conn);

} catch (Exception $e) {
    // Return an error message in JSON format if a database error occurs
    echo json_encode(['error' => $e->getMessage()]);
}
?>