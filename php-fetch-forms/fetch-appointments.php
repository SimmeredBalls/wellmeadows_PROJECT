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
    die(json_encode(["error" => "Connection failed: " . pg_last_error()]));
}

// Determine the action
$action = isset($_GET['action']) ? $_GET['action'] : null;

if ($action === 'getUpcomingAppointments') {
    // Fetch upcoming appointments for the dropdown
    // CONCAT function in PostgreSQL uses '||' for string concatenation
    $sql = "SELECT
                p.patient_num,
                p.first_name || ' ' || p.last_name || ' - ' || a.date_of_exam || ' ' || a.time_of_exam AS full_details
            FROM patients p
            INNER JOIN appointment a ON p.patient_num = a.patient_num";

    $result = pg_query($conn, $sql);

    if ($result) {
        // pg_fetch_all returns an array of associative arrays
        $data = pg_fetch_all($result);
        if ($data) {
            echo json_encode($data);
        } else {
            echo json_encode(["error" => "No upcoming appointments found."]);
        }
        pg_free_result($result);
    } else {
        echo json_encode(["error" => "Error executing query: " . pg_last_error($conn)]);
    }
} elseif ($action === 'getAppointmentInfo') {
    // Fetch specific appointment details
    $patient_num = isset($_GET['patient_num']) ? $_GET['patient_num'] : null;
    if (!$patient_num) {
        echo json_encode(["error" => "Patient number is required."]);
        exit;
    }

    // PostgreSQL uses parameterized queries with $1, $2, etc.
    $sql = "SELECT
                p.first_name || ' ' || p.last_name AS name,
                a.appointment_id,
                a.exam_room,
                a.date_of_exam,
                a.time_of_exam,
                a.staff_num
            FROM patients p
            INNER JOIN appointment a ON p.patient_num = a.patient_num
            WHERE p.patient_num = $1";

    // Use pg_prepare to prepare the statement
    $stmt = pg_prepare($conn, "get_appointment_info_stmt", $sql);

    if ($stmt) {
        // Execute the prepared statement with the parameter
        $result = pg_execute($conn, "get_appointment_info_stmt", array($patient_num));

        if ($result) {
            // pg_fetch_assoc fetches a single row as an associative array
            $data = pg_fetch_assoc($result);
            pg_free_result($result);
            if ($data) {
                echo json_encode($data);
            } else {
                echo json_encode(["error" => "No appointment found for the specified patient."]);
            }
        } else {
            echo json_encode(["error" => "Error executing prepared statement: " . pg_last_error($conn)]);
        }
    } else {
        echo json_encode(["error" => "Error preparing statement: " . pg_last_error($conn)]);
    }
} else {
    echo json_encode(["error" => "Invalid action."]);
}

pg_close($conn);

?>