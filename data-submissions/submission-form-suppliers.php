<?php
// Database connection (update with your credentials)
$host = "localhost";
$port = "5432";  // PostgreSQL default port
$dbname = "dbhospitaladmin";
$username = "postgres";  // Change to your PostgreSQL username
$password = "your_password";  // Change to your PostgreSQL password

try {
    // Establish connection using PDO
    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

// Get data from POST request
$supplier_name = $_POST['supplier_name'] ?? null;
$supplier_address = $_POST['supplier_address'] ?? null;
$supplier_email = $_POST['supplier_email'] ?? null;
$supplier_tel_num = $_POST['supplier_tel_num'] ?? null;
$supplier_fax_num = $_POST['supplier_fax_num'] ?? null;

// Validate inputs
if (!$supplier_name || !$supplier_address || !$supplier_email || !$supplier_tel_num) {
    echo "All required fields must be filled.";
    exit;
}

if (!filter_var($supplier_email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email format.";
    exit;
}

// Insert data into the database
try {
    $sql = "INSERT INTO suppliers (name, address, email, tel_num, fax_num) 
            VALUES (:supplier_name, :supplier_address, :supplier_email, :supplier_tel_num, :supplier_fax_num)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':supplier_name', $supplier_name);
    $stmt->bindParam(':supplier_address', $supplier_address);
    $stmt->bindParam(':supplier_email', $supplier_email);
    $stmt->bindParam(':supplier_tel_num', $supplier_tel_num);
    $stmt->bindParam(':supplier_fax_num', $supplier_fax_num);

    $stmt->execute();

    echo "Supplier added successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
