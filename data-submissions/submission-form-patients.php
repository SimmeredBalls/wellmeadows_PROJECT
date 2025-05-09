<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // PostgreSQL connection parameters
    $host = 'localhost';
    $port = '5432';
    $dbname = 'dbhospitaladmin';
    $username = 'postgres'; // Change to your PostgreSQL username
    $password = 'your_password'; // Change to your PostgreSQL password

    try {
        // Establish connection using PDO
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
    }

    $success = true;
    $error_message = null;
    $patient_num = null;

    // Start transaction to ensure data consistency
    $db->beginTransaction();

    // Insert patient data
    if (isset($_POST['patient'])) {
        $patient = $_POST['patient'];
        $sql = "INSERT INTO patients (clinic_num, first_name, last_name, address, phone_num, gender, date_of_birth, m_status, date_registered)
                VALUES (:clinic_num, :first_name, :last_name, :address, :phone_num, :gender, :date_of_birth, :m_status, NOW())";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':clinic_num', $patient['clinic_num']);
        $stmt->bindParam(':first_name', $patient['first_name']);
        $stmt->bindParam(':last_name', $patient['last_name']);
        $stmt->bindParam(':address', $patient['address']);
        $stmt->bindParam(':phone_num', $patient['phone_num']);
        $stmt->bindParam(':gender', $patient['gender']);
        $stmt->bindParam(':date_of_birth', $patient['date_of_birth']);
        $stmt->bindParam(':m_status', $patient['m_status']);

        if ($stmt->execute()) {
            $patient_num = $db->lastInsertId();
        } else {
            $success = false;
            $error_message = 'Failed to insert patient data.';
        }
    }

    // Insert next-of-kin data
    if ($success && isset($_POST['next_of_kin']) && $patient_num) {
        $next_of_kin = $_POST['next_of_kin'];
        $sql = "INSERT INTO nextofkin (patient_num, first_name, last_name, address, relationship, phone_num)
                VALUES (:patient_num, :first_name, :last_name, :address, :relationship, :phone_num)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':patient_num', $patient_num);
        $stmt->bindParam(':first_name', $next_of_kin['first_name']);
        $stmt->bindParam(':last_name', $next_of_kin['last_name']);
        $stmt->bindParam(':address', $next_of_kin['address']);
        $stmt->bindParam(':relationship', $next_of_kin['relationship']);
        $stmt->bindParam(':phone_num', $next_of_kin['phone_num']);

        if (!$stmt->execute()) {
            $success = false;
            $error_message = 'Failed to insert next-of-kin data.';
        }
    } elseif ($success && isset($_POST['next_of_kin']) && !$patient_num) {
        $success = false;
        $error_message = 'Patient number not available for next-of-kin.';
    }

    // Insert appointment data
    if ($success && isset($_POST['appointment']) && $patient_num) {
        $appointment = $_POST['appointment'];
        $sql = "INSERT INTO appointment (patient_num, staff_num, date_of_exam, time_of_exam, exam_room)
                VALUES (:patient_num, :staff_num, :date_of_exam, :time_of_exam, :exam_room)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':patient_num', $patient_num);
        $stmt->bindParam(':staff_num', $appointment['staff_num']);
        $stmt->bindParam(':date_of_exam', $appointment['date_of_exam']);
        $stmt->bindParam(':time_of_exam', $appointment['time_of_exam']);
        $stmt->bindParam(':exam_room', $appointment['exam_room']);

        if (!$stmt->execute()) {
            $success = false;
            $error_message = 'Failed to insert appointment data.';
        }
    } elseif ($success && isset($_POST['appointment']) && !$patient_num) {
        $success = false;
        $error_message = 'Patient number not available for appointment.';
    }

    // Commit or rollback the transaction
    if ($success) {
        $db->commit();
        // Redirect to a success page with patient number
        header("Location: patient-added-success.php?patient_num=$patient_num");
        exit();
    } else {
        $db->rollBack();
        // Redirect to an error page or display the error
        header("Location: patient-add-failed.php?error=" . urlencode($error_message));
        exit();
    }
} else {
    // If the script is accessed without a POST request
    header("HTTP/1.1 400 Bad Request");
    echo "Invalid request.";
    exit();
}
?>