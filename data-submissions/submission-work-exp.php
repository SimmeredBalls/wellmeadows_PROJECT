<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database connection using PDO
    $host = "localhost";
    $port = "5432";  // PostgreSQL default port
    $dbname = "dbhospitaladmin";
    $username = "postgres";  // Change to your PostgreSQL username
    $password = "your_password";  // Change to your PostgreSQL password

    try {
        $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo json_encode(['success' => false, 'message' => 'Database connection failed.']);
        exit;
    }

    // Get JSON data from request body
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    if (!$data) {
        echo json_encode(['success' => false, 'message' => 'Invalid JSON input.']);
        exit;
    }

    // Insert new work experience
    if (isset($data['work_experience'])) {
        $workExperience = $data['work_experience'];

        $sql = "INSERT INTO workexperience (staff_num, name_of_org, position, start_date, end_date) 
                VALUES (:staff_num, :name_of_org, :position, :start_date, :end_date)";

        try {
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':staff_num', $workExperience['staff_num'], PDO::PARAM_INT);
            $stmt->bindParam(':name_of_org', $workExperience['name_of_org'], PDO::PARAM_STR);
            $stmt->bindParam(':position', $workExperience['position'], PDO::PARAM_STR);
            $stmt->bindParam(':start_date', $workExperience['start_date'], PDO::PARAM_STR);
            $stmt->bindParam(':end_date', $workExperience['end_date'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo json_encode(['success' => true, 'message' => 'Work experience added successfully!']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to add work experience.']);
            }
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
        }

        exit;
    }

    // Fetch all work experiences
    if (isset($data['action']) && $data['action'] === 'fetch') {
        $sql = "SELECT * FROM workexperience ORDER BY experience_id DESC";

        try {
            $stmt = $db->query($sql);
            $experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(['success' => true, 'data' => $experiences]);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Failed to fetch work experiences.']);
        }

        exit;
    }

    // Search and sort functionality
    if (isset($data['action']) && $data['action'] === 'search_sort') {
        $searchTerm = $data['searchTerm'] ?? '';
        $sortColumn = $data['sortColumn'] ?? 'experience_id';

        $sql = "SELECT * FROM workexperience 
                WHERE name_of_org LIKE :searchTerm OR position LIKE :searchTerm 
                ORDER BY $sortColumn ASC";

        try {
            $stmt = $db->prepare($sql);
            $stmt->bindValue(':searchTerm', '%' . $searchTerm . '%', PDO::PARAM_STR);
            $stmt->execute();

            $experiences = $stmt->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode(['success' => true, 'data' => $experiences]);
        } catch (PDOException $e) {
            echo json_encode(['success' => false, 'message' => 'Search or sort failed.']);
        }

        exit;
    }

    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
    exit;
}
