<?php

// Database connection details for PostgreSQL
$host = 'localhost'; // Or your PostgreSQL host
$port = '5432';    // Default PostgreSQL port
$dbname = 'dbhospitaladmin';
$user = 'your_postgres_user'; // Replace with your PostgreSQL username
$password = 'your_postgres_password'; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Establish PostgreSQL connection
$db = pg_connect($conn_string);

if (!$db) {
    die(json_encode(['error' => "Database connection failed: " . pg_last_error()]));
}

// If a patient number is provided, fetch specific patient details
if (isset($_GET['patient_num'])) {
    // Sanitize and validate patient_num
    $patient_num = intval($_GET['patient_num']); // Ensure it's an integer

    // Fetch patient data from the patients table
    $sql_patient = "SELECT * FROM patients WHERE patient_num = $1";
    $result_patient = pg_query_params($db, $sql_patient, array($patient_num));

    if ($result_patient) {
        $patient_data = pg_fetch_assoc($result_patient);
        pg_free_result($result_patient);
    } else {
        echo json_encode(['error' => 'Failed to execute patient query: ' . pg_last_error($db)]);
        pg_close($db);
        exit;
    }

    // Fetch next-of-kin data from the nextofkin table
    $sql_nextofkin = "SELECT * FROM nextofkin WHERE patient_num = $1";
    $result_nextofkin = pg_query_params($db, $sql_nextofkin, array($patient_num));

    if ($result_nextofkin) {
        $nextofkin_data = pg_fetch_assoc($result_nextofkin);
        pg_free_result($result_nextofkin);
    } else {
        echo json_encode(['error' => 'Failed to execute next-of-kin query: ' . pg_last_error($db)]);
        pg_close($db);
        exit;
    }

    // Combine patient and next-of-kin data into one response
    if ($patient_data) {
        $response = [
            'patient' => $patient_data,
            'next_of_kin' => $nextofkin_data ?: null // Null if next-of-kin data is not found
        ];

        // Log the response for debugging (PostgreSQL doesn't have error_log to the same extent, you might need to configure logging)
        error_log(json_encode($response)); // This will likely go to your PHP error log

        // Output the data as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // If no patient data is found
        http_response_code(404);
        echo json_encode(['error' => 'Patient not found.']);
    }
} else {
    // If no patient_num is provided, fetch all patient data for the search and sort functionality
    $patients = [];
    $sql = "SELECT * FROM patients";
    $result = pg_query($db, $sql);

    if ($result) {
        while ($row = pg_fetch_assoc($result)) {
            $patients[] = $row;
        }
        pg_free_result($result);
        // Output all patient data as JSON
        header('Content-Type: application/json');
        echo json_encode($patients);
    } else {
        echo json_encode(['error' => 'Failed to fetch patient data: ' . pg_last_error($db)]);
    }
}

// Close the database connection
pg_close($db);
?>