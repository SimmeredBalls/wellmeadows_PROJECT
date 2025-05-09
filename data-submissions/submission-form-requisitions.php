<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// PostgreSQL connection parameters
$host = 'localhost';
$port = '5432';
$dbname = 'dbhospitaladmin';
$username = 'postgres';  // Change to your PostgreSQL username
$password = 'your_password';  // Change to your PostgreSQL password

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

// Log received data for debugging
error_log('Received data: ' . print_r($data, true));

// Validate incoming data
if (!$data || !isset($data['items']) || empty($data['items']) || !isset($data['staff_num']) || !isset($data['ward_num'])) {
    error_log('Invalid data received: ' . print_r($data, true));
    echo json_encode(['success' => false, 'message' => 'Invalid data received.']);
    exit;
}

$items = $data['items'];  // List of items
$staff_num = $data['staff_num'];  // Staff number
$ward_num = $data['ward_num'];  // Ward number

error_log("Staff Num: $staff_num, Ward Num: $ward_num");

try {
    // Start transaction
    $db->beginTransaction();

    // Insert requisition into the requisitions table
    $query = "INSERT INTO requisitions (staff_num, ward_num, created_at) VALUES (:staff_num, :ward_num, NOW())";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':staff_num', $staff_num);
    $stmt->bindParam(':ward_num', $ward_num);
    
    if ($stmt->execute()) {
        $requisition_id = $db->lastInsertId();  // Get the inserted requisition ID
        error_log("Requisition created with ID: " . $requisition_id);

        // Process each item in the requisition
        foreach ($items as $item) {
            // Extract drug name and quantity from the item
            list($drug_name, $quantity) = explode(" - ", $item);
            $drug_name = trim($drug_name);  // Trim any whitespace
            $quantity = trim($quantity);    // Trim any whitespace

            error_log("Processing item: " . $drug_name . " - " . $quantity);

            // Attempt to find the drug in the pharmaceutical, surgical, or non-surgical supplies
            $drug_id = null;
            $query_drug = "SELECT id FROM pharmaceutical_supplies WHERE drug_name = :drug_name";
            $stmt_drug = $db->prepare($query_drug);
            $stmt_drug->bindParam(':drug_name', $drug_name);
            $stmt_drug->execute();
            
            if ($stmt_drug->rowCount() > 0) {
                $drug = $stmt_drug->fetch(PDO::FETCH_ASSOC);
                $drug_id = $drug['id'];
                error_log("Found pharmaceutical supply with ID: " . $drug_id);
            } else {
                $query_drug = "SELECT id FROM surgical_supplies WHERE item_name = :drug_name";
                $stmt_drug = $db->prepare($query_drug);
                $stmt_drug->bindParam(':drug_name', $drug_name);
                $stmt_drug->execute();

                if ($stmt_drug->rowCount() > 0) {
                    $drug = $stmt_drug->fetch(PDO::FETCH_ASSOC);
                    $drug_id = $drug['id'];
                    error_log("Found surgical supply with ID: " . $drug_id);
                } else {
                    $query_drug = "SELECT id FROM non_surgical_supplies WHERE item_name = :drug_name";
                    $stmt_drug = $db->prepare($query_drug);
                    $stmt_drug->bindParam(':drug_name', $drug_name);
                    $stmt_drug->execute();

                    if ($stmt_drug->rowCount() > 0) {
                        $drug = $stmt_drug->fetch(PDO::FETCH_ASSOC);
                        $drug_id = $drug['id'];
                        error_log("Found non-surgical supply with ID: " . $drug_id);
                    } else {
                        // If the item is not found in any table, log and continue
                        error_log("Item not found: " . $drug_name);
                        continue;  // Skip this item
                    }
                }
            }

            // If a valid drug_id is found, insert the item into requisition_items
            if ($drug_id !== null) {
                $query_item = "INSERT INTO requisition_items (requisition_id, drug_id, quantity) 
                               VALUES (:requisition_id, :drug_id, :quantity)";
                $stmt_item = $db->prepare($query_item);
                $stmt_item->bindParam(':requisition_id', $requisition_id);
                $stmt_item->bindParam(':drug_id', $drug_id);
                $stmt_item->bindParam(':quantity', $quantity);

                if ($stmt_item->execute()) {
                    error_log("Inserted item: " . $drug_name . " - " . $quantity);
                } else {
                    error_log("Error inserting item: " . $stmt_item->errorInfo()[2]);
                }
            }
        }

        // Commit transaction
        $db->commit();

        // Send success response
        echo json_encode(['success' => true, 'message' => 'Requisition submitted successfully!']);
    } else {
        // Log and send error message if requisition insertion failed
        error_log("Error creating requisition: " . $stmt->errorInfo()[2]);
        echo json_encode(['success' => false, 'message' => 'Error: ' . $stmt->errorInfo()[2]]);
    }
} catch (PDOException $e) {
    // Rollback transaction if an error occurs
    $db->rollBack();
    error_log("Error processing requisition: " . $e->getMessage());
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
} finally {
    // Close database connection
    $db = null;
}
?>
