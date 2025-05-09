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

// Default query
$query = "SELECT supplier_num, name, address, email, tel_num, fax_num FROM suppliers";

// Check for search query
if (!empty($_GET['search'])) {
    $search = pg_escape_string($conn, $_GET['search']);
    $query .= " WHERE name LIKE '%$search%'
                    OR address LIKE '%$search%'
                    OR email LIKE '%$search%'
                    OR tel_num LIKE '%$search%'
                    OR fax_num LIKE '%$search%'";
}

// Check for sort option
if (!empty($_GET['sort'])) {
    $sortColumn = '';
    switch ($_GET['sort']) {
        case 'supplier-number':
            $sortColumn = 'supplier_num';
            break;
        case 'supplier-name':
            $sortColumn = 'name';
            break;
        case 'supplier-address':
            $sortColumn = 'address';
            break;
        case 'supplier-email':
            $sortColumn = 'email';
            break;
        case 'supplier-tel-num':
            $sortColumn = 'tel_num';
            break;
        case 'supplier-fax-num':
            $sortColumn = 'fax_num';
            break;
    }

    if ($sortColumn) {
        $query .= " ORDER BY \"$sortColumn\""; // Double quotes for column names
    }
}

// Execute query
$result = pg_query($conn, $query);

if (pg_num_rows($result) > 0) {
    // Generate table rows
    while ($row = pg_fetch_assoc($result)) {
        echo "
            <tr>
                <td>{$row['supplier_num']}</td>
                <td>{$row['name']}</td>
                <td>{$row['address']}</td>
                <td>{$row['email']}</td>
                <td>{$row['tel_num']}</td>
                <td>{$row['fax_num']}</td>
            </tr>
        ";
    }
} else {
    echo "<tr><td colspan='6'>No suppliers found.</td></tr>";
}

pg_free_result($result);
pg_close($conn);
?>