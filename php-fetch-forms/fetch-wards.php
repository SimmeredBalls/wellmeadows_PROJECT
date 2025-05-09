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
    die("Connection failed: " . pg_last_error());
}

// Determine the action
$action = $_REQUEST['action'] ?? '';

if ($action == 'fetch') {
    // Fetch Wards Data
    $sort = $_GET['sort'] ?? '';
    $search = $_GET['search'] ?? '';

    // Build query
    $query = "SELECT ward_num, ward_name, location, num_of_beds, phone_ext_num FROM wards WHERE 1";

    if ($search) {
        $search = pg_escape_string($conn, $search);
        $query .= " AND (ward_name LIKE '%$search%' OR location LIKE '%$search%' OR CAST(num_of_beds AS TEXT) LIKE '%$search%' OR CAST(phone_ext_num AS TEXT) LIKE '%$search%')";
    }

    if ($sort) {
        switch ($sort) {
            case 'ward-number':
                $query .= " ORDER BY ward_num";
                break;
            case 'ward-name':
                $query .= " ORDER BY ward_name";
                break;
            case 'ward-address':
                $query .= " ORDER BY location";
                break;
            case 'ward-email':
                $query .= " ORDER BY num_of_beds";
                break;
            case 'ward-tel-num':
                $query .= " ORDER BY phone_ext_num";
                break;
        }
    }

    $result = pg_query($conn, $query);
    if (pg_num_rows($result) > 0) {
        while ($row = pg_fetch_assoc($result)) {
            echo "
                <tr>
                    <td>{$row['ward_num']}</td>
                    <td>{$row['ward_name']}</td>
                    <td>{$row['location']}</td>
                    <td>{$row['num_of_beds']}</td>
                    <td>{$row['phone_ext_num']}</td>
                    <td><button class='edit-btn' data-ward-num='{$row['ward_num']}'>Edit</button></td>
                </tr>
                ";
        }
    } else {
        echo "<tr><td colspan='6'>No wards found.</td></tr>";
    }
    pg_free_result($result);

} elseif ($action == 'get_details') {
    // Get Ward Details
    $ward_num = $_GET['ward_num'] ?? '';
    $ward_num = pg_escape_string($conn, $ward_num);

    $query = "SELECT ward_num, ward_name, location, num_of_beds, phone_ext_num FROM wards WHERE ward_num = '$ward_num'";
    $result = pg_query($conn, $query);

    if (pg_num_rows($result) > 0) {
        echo json_encode(pg_fetch_assoc($result));
    } else {
        echo json_encode([]);
    }
    pg_free_result($result);

} elseif ($action == 'update') {
    // Update Ward
    $ward_num = pg_escape_string($conn, $_POST['ward_num']);
    $ward_name = pg_escape_string($conn, $_POST['ward_name']);
    $ward_location = pg_escape_string($conn, $_POST['ward_location']);
    $num_of_beds = intval($_POST['num_of_beds']); // Ensure integer
    $phone_ext_num = pg_escape_string($conn, $_POST['phone_ext_num']);

    $query = "UPDATE wards
              SET ward_name = '$ward_name', location = '$ward_location', num_of_beds = $num_of_beds, phone_ext_num = '$phone_ext_num'
              WHERE ward_num = '$ward_num'";

    $result = pg_query($conn, $query);
    if ($result) {
        echo "Ward updated successfully.";
    } else {
        echo "Error updating ward: " . pg_last_error($conn);
    }

} else {
    echo "Invalid action.";
}

pg_close($conn);
?>