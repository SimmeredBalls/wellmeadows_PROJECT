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
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Database connection failed: " . $e->getMessage());
    die("Database connection failed: " . $e->getMessage());
}

// Get data from AJAX request
$ward_name = $_POST['ward_name'] ?? null;
$ward_location = $_POST['ward_location'] ?? null;
$total_beds = $_POST['total_beds'] ?? null;
$tel_extension = $_POST['tel_extension'] ?? null;

// Validate inputs
if (!$ward_name || !$ward_location || !$total_beds || !$tel_extension) {
    echo "All fields are required.";
    exit;
}

// Insert data into the database
$sql = "INSERT INTO wards (ward_name, location, num_of_beds, phone_ext_num) 
        VALUES (:ward_name, :ward_location, :total_beds, :tel_extension)";

try {
    $stmt = $db->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':ward_name', $ward_name);
    $stmt->bindParam(':ward_location', $ward_location);
    $stmt->bindParam(':total_beds', $total_beds, PDO::PARAM_INT);
    $stmt->bindParam(':tel_extension', $tel_extension, PDO::PARAM_INT);

    // Execute the query
    if ($stmt->execute()) {
        echo "Ward added successfully.";
    } else {
        echo "Error: Unable to add the ward.";
    }
} catch (PDOException $e) {
    error_log("Error executing query: " . $e->getMessage());
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$db = null;
?>
