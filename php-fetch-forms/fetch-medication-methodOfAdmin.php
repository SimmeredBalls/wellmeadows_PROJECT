<?php
// Enable error reporting (for debugging purposes)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Database connection details for PostgreSQL
$host = 'localhost'; // Or your PostgreSQL host
$port = '5432'; // Default PostgreSQL port
$dbname = 'dbhospitaladmin';
$user = 'your_postgres_user'; // Replace with your PostgreSQL username
$password = 'your_postgres_password'; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";


// Check if drug number is provided
if (isset($_GET['drug_num'])) {
    $drug_num = $_GET['drug_num'];

    try {
        // Create a PostgreSQL connection
        $conn = pg_connect($conn_string);
        if (!$conn) {
            die(json_encode(['error' => 'Connection failed: ' . pg_last_error()]));
        }

        // Fetch method_of_admin and drug_name based on drug_num from pharmaceutical_supplies table
        // PostgreSQL uses parameterized queries with $1, $2, etc.
        $sql = "SELECT method_of_admin, drug_name FROM pharmaceutical_supplies WHERE drug_num = $1";
        $result = pg_query_params($conn, $sql, array($drug_num));

        if ($result) {
            $row = pg_fetch_assoc($result);
            pg_free_result($result);
            if ($row) {
                echo json_encode([
                    'method_of_admin' => $row['method_of_admin'],  // Method of administration
                    'drug_name' => $row['drug_name']    // Drug name
                ]);
            } else {
                echo json_encode(['error' => 'Method of administration or drug not found.']);
            }
        } else {
            echo json_encode(['error' => 'Query failed: ' . pg_last_error($conn)]);
        }

        pg_close($conn);

    } catch (Exception $e) {
        // Return an error message in JSON format if a database error occurs
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    // No drug number provided
    echo json_encode(['error' => 'No drug number provided.']);
}
?>