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
    die("Database connection failed: " . pg_last_error());
}

// Fetch patients from the database
$sql = "
    SELECT
        p.patient_num,
        p.first_name || ' ' || p.last_name AS full_name,
        p.gender,
        p.address,
        p.m_status,
        p.phone_num,
        p.date_of_birth,
        p.date_registered,
        nok.first_name || ' ' || nok.last_name AS next_of_kin_name,
        nok.relationship,
        nok.phone_num AS next_of_kin_phone
    FROM patients p
    LEFT JOIN nextofkin nok ON p.patient_num = nok.patient_num
";

$result = pg_query($db, $sql);
if (!$result) {
    die('Query failed: ' . pg_last_error($db));
}

$patients = [];
if (pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        $patients[] = $row;
    }
}

pg_free_result($result);

// Output the data as JSON
header('Content-Type: application/json');
echo json_encode($patients, JSON_PRETTY_PRINT);
exit;

// The following line is redundant as the script exits above
// echo json_encode($patients);

pg_close($db);
?>