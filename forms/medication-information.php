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
            <h1>Medication Information</h1> <br>
            <div style="padding: 10px 50px;">
                <h4>In Patient</h4>
                <select name="patientID" id="in-patient">
                    <option value="" disabled selected> Select a patient</option>
                </select>
            </div>
            <section class="medication-information-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Medication Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Medication Details</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <div class="row">
                                        <label for="drugID">Drug</label>
                                        <select name="drugID" id="drug-options">
                                            <option value="" disabled selected>Choose a drug</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="startDate">Start Date</label>
                                        <input type="date" name="startDate" id="start-date" style="margin-right: 250px;">
                                    </div>
                                </div>
                                <div class="column" style="width: 40%">
                                    <div class="row">
                                        <label for="unitsPerDay">Units Per Day</label>
                                        <select name="unitsPerDay" id="units-per-day">
                                            <option value="" disabled selected>Choose</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <label for="endDate">End Date</label>
                                        <input type="date" name="endDate" id="end-date">
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="create-medication-btn">Create Medication</button>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Administer Medication</summary>
                        <div class="accordion-content"> <br>
                            <h4>Available Filed Medication(s)</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <div class="row">
                                        <label for="medicationID">Medication</label>
                                        <select name="medicationID" id="medication">
                                            <option value="" disabled selected>Select a medication</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <p id="no-drug-available-message" style="display: none;">The patient's ward does not have this drug in stock. To make a requisition, please <span><a href="create-requisition.php">click here.</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="administer-medication-btn" style="width: 210px;">Administer Medication</button>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Patient Medication History</summary>
                        <div class="accordion-content"> <br>
                            <h4>Medication History</h4> <br>
                            <div class="table-container">
                                <table class="medication-history-table">
                                    <thead>
                                        <tr>
                                            <th>Medication ID</th>
                                            <th>Drug Name</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Units Per Day</th>
                                            <th>Administration Method</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
</body>

</html>