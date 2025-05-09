<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellmeadows Hospital</title>
    <!-- <link rel="stylesheet" href="../css/styles.css"> -->
</head>

<body>
    <!-- Nav bar component -->
    <?php include '../components/navbar.php'; ?>

    <div class="wrapper">
        <div class="container">
            <h1>View Outpatients</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Outpatients List -->
                    <div class="accordion-item">
                        <button class="accordion-header">Outpatients List</button>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="appt-number">Appt Number</option>
                                        <option value="patient-num">Patient Number</option>
                                        <option value="patient-name">Patient</option>
                                        <option value="date-of-appt">Date</option>
                                        <option value="time-of-appt">Time</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="pharma-table">
                                        <thead>
                                            <tr>
                                                <th>Appointment Number</th>
                                                <th>Patient Number</th>
                                                <th>Patient</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Appointment Number -->
                                                <td>0001</td>

                                                <!-- Patient Number -->
                                                <td>0001</td>

                                                <!-- Patient Name -->
                                                <td>Aldrin Said</td>

                                                <!-- Date -->
                                                <td>2002-12-10</td>

                                                <!-- Time -->
                                                <td>1: 00 AM</td>
                                            </tr>
                                            <tr>
                                                <!-- Appointment Number -->
                                                <td>0002</td>

                                                <!-- Patient Number -->
                                                <td>0001</td>

                                                <!-- Patient Name -->
                                                <td>Aldrin Said</td>

                                                <!-- Date -->
                                                <td>2002-12-10</td>

                                                <!-- Time -->
                                                <td>1:00 PM</td>
                                            </tr>
                                            <tr>
                                                <!-- Appointment Number -->
                                                <td>0003</td>

                                                <!-- Patient Number -->
                                                <td>0001</td>

                                                <!-- Patient Name -->
                                                <td>Aldrin Said</td>

                                                <!-- Date -->
                                                <td>2002-12-10</td>

                                                <!-- Time -->
                                                <td>1:00 AM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script> -->
</body>

</html>