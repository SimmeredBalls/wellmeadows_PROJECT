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
            <h1>Waiting List and In-Patients</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Waiting List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <h4>Current Waiting List</h4> <br>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="waiting-list-table">
                                        <thead>
                                            <tr>
                                                <th>Patient Number</th>
                                                <th>Patient Name</th>
                                                <th>Date Added</th>
                                                <th>Ward Preference</th>
                                                <th>Expected Stay (Days)</th>
                                                <th>Planned Admission Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0001</td>
                                                <td>Aldrin Said</td>
                                                <td>2002-12-10</td>
                                                <td>
                                                    <select name="wardPreference" id="ward-preference-0001">
                                                        <option value="">Select Ward</option>
                                                    </select>
                                                </td>
                                                <td>143</td>
                                                <td>2002-12-10</td>
                                                <td>
                                                    <button type="button" class="update-waitlist-btn" data-patient-id="0001">Update</button>
                                                    <button type="button" class="delete-waitlist-btn" data-patient-id="0001">Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Current In-Patients</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <h4>Current In-Patients</h4> <br>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="in-patients-table">
                                        <thead>
                                            <tr>
                                                <th>Patient Number</th>
                                                <th>Patient Name</th>
                                                <th>Date Admitted</th>
                                                <th>Ward</th>
                                                <th>Bed Number</th>
                                                <th>Expected Stay (Days)</th>
                                                <th>Planned Exit Date</th>
                                                <th>Actual Exit Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0002</td>
                                                <td>Juana Dela Cruz</td>
                                                <td>2025-05-05</td>
                                                <td><span id="ward-0002">General Ward</span></td>
                                                <td>
                                                    <select name="bed" id="bed-0002">
                                                        <option value="">Select Bed</option>
                                                        <option value="1">1</option>
                                                    </select>
                                                </td>
                                                <td>5</td>
                                                <td>2025-05-10</td>
                                                <td><input type="date" name="exit-date" id="exit-date-0002"></td>
                                                <td>
                                                    <button type="button" class="update-inpatient-btn" data-patient-id="0002">Update</button>
                                                </td>
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