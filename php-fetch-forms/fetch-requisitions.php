<?php
// fetch-requisition.php

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
    die(json_encode(['success' => false, 'message' => "Database connection failed: " . pg_last_error()]));
}

// Set content type to JSON
header('Content-Type: application/json');

// Check the action to fetch appropriate data
if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'getPharmaceuticalSupplies':
            fetchPharmaceuticalSupplies($db);
            break;

        case 'getSurgicalSupplies':
            fetchSurgicalSupplies($db);
            break;

        case 'getNonSurgicalSupplies':
            fetchNonSurgicalSupplies($db);
            break;

        case 'getStaff':
            fetchStaff($db);
            break;

        case 'getWards':
            fetchWards($db);
            break;

        case 'getRequisitions':
            fetchRequisitions($db);
            break;

        case 'getRequisitionItems':
            if (isset($_GET['requisition_id'])) {
                fetchRequisitionItems($db, $_GET['requisition_id']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Requisition ID is required']);
            }
            break;

        default:
            echo json_encode(['success' => false, 'message' => 'Invalid action']);
            break;
    }
}

// Fetch Pharmaceutical Supplies
function fetchPharmaceuticalSupplies($db)
{
    $query = "SELECT id, drug_name FROM pharmaceutical_supplies";
    $result = pg_query($db, $query);
    $drugs = [];

    while ($row = pg_fetch_assoc($result)) {
        $drugs[] = $row;
    }

    pg_free_result($result);
    echo json_encode($drugs);
}

// Fetch Surgical Supplies
function fetchSurgicalSupplies($db)
{
    $query = "SELECT id, item_name FROM surgical_supplies";
    $result = pg_query($db, $query);
    $supplies = [];

    while ($row = pg_fetch_assoc($result)) {
        $supplies[] = $row;
    }

    pg_free_result($result);
    echo json_encode($supplies);
}

// Fetch Non-Surgical Supplies
function fetchNonSurgicalSupplies($db)
{
    $query = "SELECT id, item_name FROM non_surgical_supplies";
    $result = pg_query($db, $query);
    $supplies = [];

    while ($row = pg_fetch_assoc($result)) {
        $supplies[] = $row;
    }

    pg_free_result($result);
    echo json_encode($supplies);
}

// Fetch Staff
function fetchStaff($db)
{
    $query = "SELECT staff_num, first_name || ' ' || last_name AS name FROM staff";
    $result = pg_query($db, $query);
    $staff = [];

    while ($row = pg_fetch_assoc($result)) {
        $staff[] = $row;
    }

    pg_free_result($result);
    echo json_encode($staff);
}

// Fetch Wards
function fetchWards($db)
{
    $query = "SELECT ward_num, ward_name FROM wards";
    $result = pg_query($db, $query);
    $wards = [];

    while ($row = pg_fetch_assoc($result)) {
        $wards[] = $row;
    }

    pg_free_result($result);
    echo json_encode($wards);
}

// Fetch Requisitions
function fetchRequisitions($db)
{
    $query = "SELECT r.requisition_id, r.created_at, w.ward_name, s.first_name, s.last_name
              FROM requisitions r
              JOIN wards w ON r.ward_num = w.ward_num
              JOIN staff s ON r.staff_num = s.staff_num";
    $result = pg_query($db, $query);
    $requisitions = [];

    while ($row = pg_fetch_assoc($result)) {
        $requisitions[] = $row;
    }

    pg_free_result($result);
    echo json_encode($requisitions);
}

// Fetch Items for a Specific Requisition
function fetchRequisitionItems($db, $requisition_id)
{
    $query = "SELECT ri.quantity,
                     COALESCE(ps.drug_name, ss.item_name, ns.item_name) AS drug_name
              FROM requisition_items ri
              LEFT JOIN pharmaceutical_supplies ps ON ri.drug_id = ps.id
              LEFT JOIN surgical_supplies ss ON ri.drug_id = ss.id
              LEFT JOIN non_surgical_supplies ns ON ri.drug_id = ns.id
              WHERE ri.requisition_id = $1";
    $result = pg_query_params($db, $query, array($requisition_id));
    $items = [];

    while ($row = pg_fetch_assoc($result)) {
        $items[] = $row;
    }

    pg_free_result($result);
    echo json_encode($items);
}

pg_close($db);
?>