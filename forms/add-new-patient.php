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
            <h1>Add a Patient</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Patient Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Patient Details</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <!-- First Name -->
                                    <div class="row">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name">
                                    </div>
                                </div>
                                <div class="column">
                                    <!-- Last Name -->
                                    <div class="row">
                                        <label for="first_name">Last Name</label>
                                        <input type="text" id="last_name">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="patient-adress" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <!-- Marital Status -->
                                    <div class="row">
                                        <label for="marital-status">Marital Status</label>
                                        <select id="marital-status">
                                            <option value="" disabled selected>Choose a status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>

                                    <!-- Clinic Number -->
                                    <div class="row">
                                        <label for="country">Clinic Num</label>
                                        <input type="number" name="clinic-num" id="clinic-num">
                                    </div>

                                    <!-- Date of Birth -->
                                    <div class="row">
                                        <label for="date-of-birth">Date of Birth</label>
                                        <input type="date" id="date-of-birth">
                                    </div>
                                </div>

                                <div class="column">
                                    <!-- Gender -->
                                    <div class="row">
                                        <label for="gender">Gender</label>
                                        <select id="gender">
                                            <option value="" disabled selected>Choose a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <!-- Phone -->
                                    <div class="row">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="tel" id="phone-input">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Next-of-Kin Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Next-of-Kin Details</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <!-- First Name -->
                                    <div class="row">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="kin-first-name" id="first-name">
                                    </div>
                                </div>

                                <div class="column">
                                    <!-- Last Name -->
                                    <div class="row">
                                        <label for="first_name">Last Name</label>
                                        <input type="text" name="kin-last-name" id="last-name">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 500px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="kin-address" id="kin-address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">

                                    <!-- Relationship with the patient -->
                                    <div class="row">
                                        <label for="relationship">Relationship</label>
                                        <select name="kin-relationship" id="relationship">
                                            <option value="" disabled selected>Relationship with the patient</option>
                                            <option value="Spouse">Spouse</option>
                                            <option value="Parent">Parent</option>
                                            <option value="Sibling">Sibling</option>
                                            <option value="Child">Child</option>
                                            <option value="Guardian">Guardian</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                    <div class="row-special">
                                        <label id="other-relationship-label" for="other-relationship">If others, please specify:</label>
                                        <input type="text" id="other-relationship" name="other-relationship" disabled>
                                    </div> <br>
                                </div>
                                <div class="column">
                                    <!-- Phone Number-->
                                    <div class="row">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="tel" name="kin-phone-input" id="kin-phone-input">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Local Doctor Referral</button>
                        <div class="accordion-content"> <br>
                            <h4>Choose a Local Doctor That Referred the Patient</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width:30%;">
                                    <!-- Doctor -->
                                    <div class="row">
                                        <label for="doctor-referred">Local Doctors: </label>
                                        <select id="local-doctors" name="local-doctors">
                                            <!-- options from db -->
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <!-- Add a Doctor -->
                                    <div class="row">
                                        <p style="font-size: 14px;">Add new Local Doctor? <span><a href="local-doctor-information.php">Click here</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Appointment</button>
                        <div class="accordion-content"> <br>
                            <h4>Schedule an Appointment</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 30%;">
                                    <!-- Exam Room -->
                                    <div class="row">
                                        <label for="doctor-referred">Exam Room </label>
                                        <input type="text" name="exam-room" id="exam-room">
                                    </div>
                                </div>
                                <div class="column" style="width: 30%;">
                                    <!-- Appointment Date and Time -->
                                    <div class="row">
                                        <label for="appointment-date-and-time">Appointment</label>
                                        <input type="time" name="appointment-time" id="appointment-time">
                                        <input type="date" name="appointment-date" id="appointment-date">
                                    </div>

                                    
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 30%;">
                                    <!-- Staff -->
                                    
                                    <div class="row">
                                        <label for="country">Staff</label>
                                        <input type="number" name="clinic-num" id="staff">
                                    </div>
                                    <!-- <div class="row">
                                        <label for="staff">Staff</label>
                                        <select name="staff" id="staff">
                                            <option value="" disabled selected>Choose</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-patient-btn">Add Patient</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>

    <!-- JS Script -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/ajax-patient.js"></script> -->
</body>

</html>