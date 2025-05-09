<?php

// Database connection details for PostgreSQL
$host = 'localhost'; // Or your PostgreSQL host
$port = '5432';    // Default PostgreSQL port
$dbname = 'dbhospitaladmin';
$user = 'your_postgres_user'; // Replace with your PostgreSQL username
$password = 'your_postgres_password'; // Replace with your PostgreSQL password

$conn_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

// Connect to the database
$conn = pg_connect($conn_string);

if (!$conn) {
    die("Database connection failed: " . pg_last_error());
}

// Get search and sort inputs
$search = $_GET['search'] ?? '';
$sort = $_GET['sort'] ?? '';

// Base query
$sql = "SELECT qualification_id, staff_num, type, date_of_qualification, institute_name FROM qualifications WHERE
            CAST(staff_num AS TEXT) LIKE '%$search%' OR
            type LIKE '%$search%' OR
            CAST(date_of_qualification AS TEXT) LIKE '%$search%' OR
            institute_name LIKE '%$search%'";

// Add sorting if applicable
if ($sort) {
    switch ($sort) {
        case 'ID':
            $sql .= " ORDER BY qualification_id";
            break;
        case 'Staff Number':
            $sql .= " ORDER BY staff_num";
            break;
        case 'staff-type':
            $sql .= " ORDER BY type";
            break;
        case 'qualification-date':
            $sql .= " ORDER BY date_of_qualification";
            break;
        case 'institute-name':
            $sql .= " ORDER BY institute_name";
            break;
    }
}

// Execute query
$result = pg_query($conn, $sql);

// Generate HTML for the table rows
$output = '';
if (pg_num_rows($result) > 0) {
    while ($row = pg_fetch_assoc($result)) {
        $output .= '<tr>
                            <td>' . $row['qualification_id'] . '</td>
                            <td>' . $row['staff_num'] . '</td>
                            <td>' . $row['type'] . '</td>
                            <td>' . $row['date_of_qualification'] . '</td>
                            <td>' . $row['institute_name'] . '</td>
                        </tr>';
    }
} else {
    $output .= '<tr><td colspan="5">No qualifications found.</td></tr>';
}

echo $output;

pg_free_result($result);
pg_close($conn);
?>