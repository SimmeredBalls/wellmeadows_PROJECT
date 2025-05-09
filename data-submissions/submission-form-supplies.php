<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection (PostgreSQL)
$host = "localhost";
$port = "5432";  // PostgreSQL default port
$dbname = "dbhospitaladmin";
$username = "postgres";  // Change to your PostgreSQL username
$password = "your_password";  // Change to your PostgreSQL password

try {
    // Establish connection using PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection failed: " . $e->getMessage());
}

// Get raw POST data
$data = json_decode(file_get_contents('php://input'), true);
error_log('Received data: ' . print_r($data, true));

if (!$data || !isset($data['supply']) || empty($data['supply'])) {
    error_log('Invalid data received: ' . print_r($data, true));
    echo json_encode(['success' => false, 'message' => 'Invalid data received.']);
    exit;
}

$supply = $data['supply'];
$type = $supply['type'] ?? null;
$drug_name = $supply['drug_name'] ?? null;
$item_name = $supply['item_name'] ?? null;
$quantity_stock = $supply['quantity_stock'] ?? null;
$reorder_level = $supply['reorder_level'] ?? null;
$cost_per_unit = $supply['cost_per_unit'] ?? null;
$description = $supply['description'] ?? null;
$method_admin = $supply['method_admin'] ?? null;

// Insert supply into the database based on type
if ($type === 'pharmaceutical' && $drug_name) {
    $query = "INSERT INTO pharmaceutical_supplies (drug_name, dosage, quantity_stock, reorder_level, cost_per_unit, description, method_of_admin) 
              VALUES (:drug_name, :dosage, :quantity_stock, :reorder_level, :cost_per_unit, :description, :method_admin)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':drug_name', $drug_name);
    $stmt->bindParam(':dosage', $supply['dosage']);
    $stmt->bindParam(':quantity_stock', $quantity_stock);
    $stmt->bindParam(':reorder_level', $reorder_level);
    $stmt->bindParam(':cost_per_unit', $cost_per_unit);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':method_admin', $method_admin);
} elseif ($type === 'non-surgical' && $item_name) {
    $query = "INSERT INTO non_surgical_supplies (item_name, quantity_stock, reorder_level, cost_per_unit, description) 
              VALUES (:item_name, :quantity_stock, :reorder_level, :cost_per_unit, :description)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':item_name', $item_name);
    $stmt->bindParam(':quantity_stock', $quantity_stock);
    $stmt->bindParam(':reorder_level', $reorder_level);
    $stmt->bindParam(':cost_per_unit', $cost_per_unit);
    $stmt->bindParam(':description', $description);
} elseif ($type === 'surgical' && $item_name) {
    $query = "INSERT INTO surgical_supplies (item_name, quantity_stock, reorder_level, cost_per_unit, description) 
              VALUES (:item_name, :quantity_stock, :reorder_level, :cost_per_unit, :description)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':item_name', $item_name);
    $stmt->bindParam(':quantity_stock', $quantity_stock);
    $stmt->bindParam(':reorder_level', $reorder_level);
    $stmt->bindParam(':cost_per_unit', $cost_per_unit);
    $stmt->bindParam(':description', $description);
} else {
    error_log('Invalid supply type or missing name.');
    echo json_encode(['success' => false, 'message' => 'Invalid supply type or missing name.']);
    exit;
}

try {
    // Execute the query
    $stmt->execute();
    error_log("Supply added successfully.");
    echo json_encode(['success' => true, 'message' => 'Supply added successfully!']);
} catch (PDOException $e) {
    error_log("Error adding supply: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}

// Close connection
$db = null;
?>
