<?php
// PostgreSQL database credentials
$host = "localhost";
$port = "5432";
$dbname = "dbhospitaladmin";
$user = "postgres"; // Change to your PostgreSQL user
$password = "your_password"; // Change to your PostgreSQL password

try {
    // Create PDO connection
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Get data from AJAX request
$first_name = $_POST['first_name'] ?? null;
$last_name = $_POST['last_name'] ?? null;
$address = $_POST['address'] ?? null;
$phone = $_POST['phone'] ?? null;

// Validate inputs
if (!$first_name || !$last_name || !$address || !$phone) {
    echo "All required fields must be filled.";
    exit;
}

// Insert data using prepared statement
$sql = "INSERT INTO localdoctors (first_name, last_name, address, phone_num) 
        VALUES (:first_name, :last_name, :address, :phone)";
try {
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':first_name', $first_name);
    $stmt->bindValue(':last_name', $last_name);
    $stmt->bindValue(':address', $address);
    $stmt->bindValue(':phone', $phone);
    $stmt->execute();
    echo "Doctor added successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close connection
$conn = null;
?>
