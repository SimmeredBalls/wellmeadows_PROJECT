<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
        echo json_encode(['success' => false, 'message' => 'Database connection failed: ' . $e->getMessage()]);
        exit;
    }

    // Get JSON data from request body
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON input.']);
        exit;
    }

    // Insert staff information
    if (isset($data['staff'])) {
        $staff = $data['staff'];

        // Begin transaction for atomic operations
        try {
            $db->beginTransaction();

            // Insert staff data into the staff table
            $stmt1 = $db->prepare(
                "INSERT INTO staff (ward_num, first_name, last_name, address, gender, date_of_birth, phone_num, insurance_num, position, current_salary, salary_scale) 
                 VALUES (:ward_num, :first_name, :last_name, :address, :gender, :date_of_birth, :phone_num, :insurance_num, :position, :current_salary, :salary_scale)"
            );

            $stmt1->bindParam(':ward_num', $staff['ward_num']);
            $stmt1->bindParam(':first_name', $staff['first_name']);
            $stmt1->bindParam(':last_name', $staff['last_name']);
            $stmt1->bindParam(':address', $staff['address']);
            $stmt1->bindParam(':gender', $staff['gender']);
            $stmt1->bindParam(':date_of_birth', $staff['date_of_birth']);
            $stmt1->bindParam(':phone_num', $staff['phone_num']);
            $stmt1->bindParam(':insurance_num', $staff['insurance_num']);
            $stmt1->bindParam(':position', $staff['position']);
            $stmt1->bindParam(':current_salary', $staff['current_salary']);
            $stmt1->bindParam(':salary_scale', $staff['salary_scale']);

            if ($stmt1->execute()) {
                $staff_num = $db->lastInsertId();  // Get the last inserted staff ID

                // Insert contract data into the contract table
                $stmt2 = $db->prepare(
                    "INSERT INTO contract (staff_num, num_of_hours, contract_type, type_of_salary) 
                     VALUES (:staff_num, :num_of_hours, :contract_type, :type_of_salary)"
                );

                $stmt2->bindParam(':staff_num', $staff_num);
                $stmt2->bindParam(':num_of_hours', $staff['num_of_hours']);
                $stmt2->bindParam(':contract_type', $staff['contract_type']);
                $stmt2->bindParam(':type_of_salary', $staff['type_of_salary']);

                if ($stmt2->execute()) {
                    // Commit transaction if all queries succeed
                    $db->commit();
                    echo json_encode(['success' => true]);
                } else {
                    $db->rollBack();
                    echo json_encode(['success' => false, 'message' => 'Failed to insert contract data.']);
                }
            } else {
                $db->rollBack();
                echo json_encode(['success' => false, 'message' => 'Failed to insert staff data.']);
            }
        } catch (PDOException $e) {
            // Rollback in case of an error
            $db->rollBack();
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    }

    exit;
}
?>
