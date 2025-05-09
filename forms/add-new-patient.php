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
            <h1>Add a Patient</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <details class="accordion-item">
                        <summary class="accordion-header">Patient Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Patient Details</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="first_name">First Name</label>
                                        <input type="text" id="first_name" name="p_firstName">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" id="last_name" name="p_lastName">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="p_address" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="marital-status">Marital Status</label>
                                        <select id="marital-status" name="p_maritalStatus">
                                            <option value="" disabled selected>Choose a status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="clinicNum">Clinic Num</label>
                                        <input type="number" name="p_clinicNum" id="clinicNum">
                                    </div>
                                    <div class="row">
                                        <label for="date-of-birth">Date of Birth</label>
                                        <input type="date" id="date-of-birth" name="p_dateOfBirth">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="gender">Gender</label>
                                        <select id="gender" name="p_sex">
                                            <option value="" disabled selected>Choose a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <label for="phone-input">Phone Number</label>
                                        <input type="tel" id="phone-input" name="p_phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Next-of-Kin Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Next-of-Kin Details</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="kinFirstName">First Name</label>
                                        <input type="text" name="kin_firstName" id="kinFirstName">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="kinLastName">Last Name</label>
                                        <input type="text" name="kin_lastName" id="kinLastName">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 500px; ">
                                        <label for="kin-address">Address</label>
                                        <input type="text" name="kin_address" id="kin-address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
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
                                    <div class="row">
                                        <label for="kin-phone-input">Phone Number</label>
                                        <input type="tel" name="kin_phone" id="kin-phone-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Local Doctor Referral</summary>
                        <div class="accordion-content"> <br>
                            <h4>Choose a Local Doctor That Referred the Patient</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width:30%;">
                                    <div class="row">
                                        <label for="local-doctors">Local Doctors: </label>
                                        <select id="local-doctors" name="localDoctorID">
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <p style="font-size: 14px;">Add new Local Doctor? <span><a href="local-doctor-information.php">Click here</a></span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Appointment</summary>
                        <div class="accordion-content"> <br>
                            <h4>Schedule an Appointment</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 30%;">
                                    <div class="row">
                                        <label for="exam-room">Exam Room </label>
                                        <input type="text" name="appointment_room" id="exam-room">
                                    </div>
                                </div>
                                <div class="column" style="width: 30%;">
                                    <div class="row">
                                        <label for="appointment-date-and-time">Appointment</label>
                                        <input type="time" name="appointment_time" id="appointment-time">
                                        <input type="date" name="appointment_date" id="appointment-date">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 30%;">
                                    <div class="row">
                                        <label for="staff">Staff</label>
                                        <select name="staffID" id="staff">
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
            <div class="submit-bttns">
                <button type="button" id="add-patient-btn">Add Patient</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>
    </body>
</html>