<?php


// PostgreSQL credentials
$host = "localhost";
$port = "5432";
$dbname = "dbhospitaladmin";
$user = "postgres"; // change to your PostgreSQL user
$password = "your_password"; // change to your PostgreSQL password

try {
    // Create PDO connection
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["message" => "Database connection failed.", "error" => $e->getMessage()]);
    exit;
}

// Decode incoming JSON data
$data = json_decode(file_get_contents("php://input"), true);

// Validate received data
if (!$data || !isset($data["type"])) {
    echo json_encode(["message" => "Invalid request data."]);
    exit;
}

$type = $data["type"];
$stmt = null;

// Handle Out-Patient
if ($type === "Out-Patient") {
    $patientNum = $data["patient_num"];
    $dateOfAppt = $data["date_of_appt"];
    $timeOfAppt = $data["time_of_appt"];

    if (!$patientNum || !$dateOfAppt || !$timeOfAppt) {
        echo json_encode(["message" => "Missing required fields for Out-Patient."]);
        exit;
    }

    $sql = "INSERT INTO outpatients (patient_num, time_of_appt, date_of_appt) VALUES (:patient_num, :time_of_appt, :date_of_appt)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':patient_num', $patientNum, PDO::PARAM_INT);
    $stmt->bindValue(':time_of_appt', $timeOfAppt);
    $stmt->bindValue(':date_of_appt', $dateOfAppt);
}
// Handle In-Patient
else if ($type === "In-Patient") {
    $patientNum = $data["patient_num"];
    $wardNum = $data["ward_num"];
    $waitingListDate = $data["waiting_list_date"];
    $expectedStay = $data["expected_stay"];
    $dateAdmitted = $data["date_admitted"];
    $dateExpectedLeave = $data["date_expected_leave"];
    $bedNum = $data["bed_num"];

    if (!$patientNum || !$wardNum || !$waitingListDate || !$expectedStay || !$dateAdmitted || !$dateExpectedLeave || !$bedNum) {
        echo json_encode(["message" => "Missing required fields for In-Patient."]);
        exit;
    }

    $sql = "INSERT INTO inpatients (patient_num, ward_num, waiting_list_date, expected_stay, date_admitted, date_expected_leave, bed_num) 
            VALUES (:patient_num, :ward_num, :waiting_list_date, :expected_stay, :date_admitted, :date_expected_leave, :bed_num)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':patient_num', $patientNum, PDO::PARAM_INT);
    $stmt->bindValue(':ward_num', $wardNum);
    $stmt->bindValue(':waiting_list_date', $waitingListDate);
    $stmt->bindValue(':expected_stay', $expectedStay);
    $stmt->bindValue(':date_admitted', $dateAdmitted);
    $stmt->bindValue(':date_expected_leave', $dateExpectedLeave);
    $stmt->bindValue(':bed_num', $bedNum);
} else {
    echo json_encode(["message" => "Invalid appointment type."]);
    exit;
}

// Execute the query and handle response
try {
    $stmt->execute();
    echo json_encode(["message" => "Appointment conducted successfully!"]);
} catch (PDOException $e) {
    echo json_encode(["message" => "Failed to conduct appointment.", "error" => $e->getMessage()]);
}

// Close connection
$stmt = null;
$conn = null;
?>
