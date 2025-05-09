<?php
// Check if the POST request contains patient data
$data = json_decode(file_get_contents('php://input'), true);

if (isset($data['patient_num'])) {
    $patient_num = $data['patient_num'];
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $address = $data['address'];
    $phone_num = $data['phone_num'];
    $gender = $data['gender'];
    $date_of_birth = $data['date_of_birth'];
    $m_status = $data['m_status'];
    $date_registered = $data['date_registered'];

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

    // Update the patient information in the database
    $sql_update = "UPDATE patients SET 
                    first_name = :first_name, 
                    last_name = :last_name, 
                    address = :address, 
                    phone_num = :phone_num, 
                    gender = :gender, 
                    date_of_birth = :date_of_birth, 
                    m_status = :m_status, 
                    date_registered = :date_registered 
                    WHERE patient_num = :patient_num";

    try {
        $stmt = $db->prepare($sql_update);

        // Bind parameters
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':phone_num', $phone_num);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':date_of_birth', $date_of_birth);
        $stmt->bindParam(':m_status', $m_status);
        $stmt->bindParam(':date_registered', $date_registered);
        $stmt->bindParam(':patient_num', $patient_num);

        // Execute the update
        if ($stmt->execute()) {
            $response = ['success' => true];
        } else {
            $response = ['success' => false, 'message' => 'Failed to update patient data.'];
        }

        // Output the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);

    } catch (PDOException $e) {
        error_log("Error executing query: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
    }

    // Close the database connection
    $db = null;
} else {
    // If patient_num is not provided in the request
    http_response_code(400);
    echo json_encode(['error' => 'Patient number is required']);
}
?>
