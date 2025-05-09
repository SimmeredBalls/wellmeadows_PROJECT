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
            <h1>Medication Information</h1> <br>
            <div style="padding: 10px 50px;">
                <h4>In Patient</h4>
                <select name="in-patient" id="in-patient">
                    <option value="" disabled selected> Select a patient</option>
                </select>
            </div>
            <section class="medication-information-section">
                <div class="accordion">
                    <!-- Medication Information -->
                    <div class="accordion-item">
                        <button class="accordion-header">Medication Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Medication Details</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <!-- Drug -->
                                    <div class="row">
                                        <label for="drug">Drug</label>
                                        <select name="drug-options" id="drug-options">
                                            <option value="" disabled selected>Choose a drug</option>
                                            <option value="">Shabu :)</option>
                                        </select>
                                    </div>
                                    <!-- Start Date -->
                                    <div class="row">
                                        <label for="start-date">Start Date</label>
                                        <input type="date" name="start-date" id="start-date" style="margin-right: 250px;">
                                    </div>
                                </div>
                                <div class="column" style="width: 40%">
                                    <!-- Units Per Day -->
                                    <div class="row">
                                        <label for="units-per-day">Units Per Day</label>
                                        <select name="units-per-day" id="units-per-day">
                                            <option value="" disabled selected>Choose</option>
                                            <option value="1" >1</option>
                                            <option value="2" >2</option>
                                        </select>
                                    </div>

                                    <!-- End Date -->
                                    <div class="row">
                                        <label for="end-date">End Date</label>
                                        <input type="date" name="end-date" id="end-date">
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="conduct-appointment-btn">Create Medication</button>
                            </div>
                        </div>
                    </div>

                    <!-- Administer Medication -->
                    <div class="accordion-item">
                        <button class="accordion-header">Administer Medication</button>
                        <div class="accordion-content"> <br>
                            <h4>Available Filed Medication(s)</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <!-- Prescription -->
                                    <div class="row">
                                        <label for="medication">Medication</label>
                                        <select name="medication" id="medication">
                                            <option value="" disabled selected>Select a medication</option>
                                        </select>
                                    </div>

                                    <!-- Message (This will appear if the medicine/drug has no stocks-->
                                    <div class="row">
                                        <p id="no-drug-available-message">The patient's ward does not have this drug in stock. To make a requisition, please <span><a href="create-requisition.php">click here.</a></span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="conduct-appointment-btn" style="width: 210px;">Administer Medication</button>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Medication History -->
                    <div class="accordion-item">
                        <button class="accordion-header">Patient Medication History</button>
                        <div class="accordion-content"> <br>
                            <h4>Medication History</h4> <br>
                            
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/ajax-medication.js"></script> -->
</body>

</html>