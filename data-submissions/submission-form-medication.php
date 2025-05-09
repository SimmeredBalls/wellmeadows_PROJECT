<?php

$host = 'localhost';
$port = '5432';
$dbname = 'dbhospitaladmin';
$username = 'postgres'; // change this to your PostgreSQL username
$password = 'your_password'; // change this to your PostgreSQL password

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get POST data
    $patient_num = $_POST['patient_num'] ?? null;
    $drug_num = $_POST['drug_num'] ?? null;
    $units_per_day = $_POST['units_per_day'] ?? null;  // This maps to method_of_admin
    $start_date = $_POST['start_date'] ?? null;
    $end_date = $_POST['end_date'] ?? null;

    // Basic validation
    if (!$patient_num || !$drug_num || !$units_per_day || !$start_date || !$end_date) {
        echo json_encode(['success' => false, 'error' => 'Missing required fields.']);
        exit;
    }

    try {
        // PostgreSQL DSN
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Insert medication record
        $stmt = $pdo->prepare("
            INSERT INTO medications (patient_num, drug_num, method_of_admin, start_date, end_date)
            VALUES (:patient_num, :drug_num, :method_of_admin, :start_date, :end_date)
        ");
        $stmt->bindParam(':patient_num', $patient_num);
        $stmt->bindParam(':drug_num', $drug_num);
        $stmt->bindParam(':method_of_admin', $units_per_day);
        $stmt->bindParam(':start_date', $start_date);
        $stmt->bindParam(':end_date', $end_date);

        $stmt->execute();

        echo json_encode(['success' => true]);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
}
?>
