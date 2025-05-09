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
$staff_num = $_POST['staff_num'] ?? null;
$type = $_POST['type'] ?? null;
$date_of_qualification = $_POST['date_of_qualification'] ?? null;
$institute_name = $_POST['institute_name'] ?? null;

// Validate inputs
if (!$staff_num || !$type || !$date_of_qualification || !$institute_name) {
    echo "All fields are required.";
    exit;
}

// Insert data into the database
$sql = "INSERT INTO qualifications (staff_num, type, date_of_qualification, institute_name) 
        VALUES (:staff_num, :type, :date_of_qualification, :institute_name)";

try {
    $stmt = $db->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':staff_num', $staff_num, PDO::PARAM_INT);
    $stmt->bindParam(':type', $type, PDO::PARAM_STR);
    $stmt->bindParam(':date_of_qualification', $date_of_qualification, PDO::PARAM_STR);
    $stmt->bindParam(':institute_name', $institute_name, PDO::PARAM_STR);

    // Execute the query
    if ($stmt->execute()) {
        echo "Qualification added successfully.";
    } else {
        echo "Error: Unable to add the qualification.";
    }
} catch (PDOException $e) {
    error_log("Error executing query: " . $e->getMessage());
    echo "Error: " . $e->getMessage();
}

// Close the database connection
$db = null;
?>
