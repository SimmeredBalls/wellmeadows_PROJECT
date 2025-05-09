<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellmeadows Hospital</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <?php include '../components/navbar.php'; ?>

    <div class="wrapper">
        <div class="container">
            <h1>View Outpatients</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Outpatients List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="appointmentID">Appointment Number</option>
                                        <option value="patientID">Patient Number</option>
                                        <option value="patientName">Patient</option>
                                        <option value="appointmentDate">Date</option>
                                        <option value="appointmentTime">Time</option>
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
                                                <td>0001</td>
                                                <td>0001</td>
                                                <td>Aldrin Said</td>
                                                <td>2002-12-10</td>
                                                <td>1: 00 AM</td>
                                            </tr>
                                            <tr>
                                                <td>0002</td>
                                                <td>0001</td>
                                                <td>Aldrin Said</td>
                                                <td>2002-12-10</td>
                                                <td>1:00 PM</td>
                                            </tr>
                                            <tr>
                                                <td>0003</td>
                                                <td>0001</td>
                                                <td>Aldrin Said</td>
                                                <td>2002-12-10</td>
                                                <td>1:00 AM</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
</body>

</html>