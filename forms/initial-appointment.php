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
            <h1>Initial Appointments</h1>
            <section class="initial-appointment-section">
                <div class="accordion">
                    <!-- Upcoming Appointments -->
                    <div class="accordion-item">
                        <button class="accordion-header">Upcoming Appointments</button>
                        <div class="accordion-content"> <br>
                            <h4>Patient Details</h4> <br>
                            <div class="content-container">
                                <!-- Combo box for patient details -->
                                <select name="patient-details" id="patient-details">
                                    <!-- info from db -->
                                    <option value="" disabled selected>Select a patient</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Appointment Information -->
                    <div class="accordion-item" id="initial-appointment-section">
                        <button class="accordion-header">Appointment Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Appointment</h4> <br>
                            <div class="content-container">
                                <!-- Appointment Info -->
                                <div class="appointment-info-container">
                                    <!-- Patient name -->
                                    <h6>Full Name:
                                        <span class="patient-name"> Aldrin Said</span>
                                    </h6>
                                    <!-- Appointment Number -->
                                    <h6 id="appt-num">Appt Num:
                                        <span class="appointment-number">0001</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 50%;">
                                    <!-- Exam Room -->
                                    <div class="row">
                                        <label for="exam-room">Exam Room</label>
                                        <input type="text" name="exam-room" id="exam-room" readonly value="E102">
                                    </div>
                                </div>
                                <div class="column" style="width: 45%;">
                                    <!-- Appointment Date and Time -->
                                    <div class="row">
                                        <label for="appt">Appointment</label>
                                        <input type="date" name="appt-date" id="appt-date" readonly value="2002-12-10">
                                        <input type="time" name="appt-time" id="appt-time" readonly value="14:30">
                                    </div>
                                </div>
                                <div class="column">
                                    <!-- Staff -->
                                    <div class="row">
                                        <label for="staff">Staff</label>
                                        <input type="number" name="staff-number" id="staff-number" readonly style="width: 60%;" value="1002">
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="conduct-appointment-btn">Conduct Appointment</button>
                            </div>
                        </div>
                    </div>

                    <!-- Conduct Examination -->
                    <div class="accordion-item" id="conduct-appointments-form">
                        <button class="accordion-header">Conduct Appointments</button>
                        <div class="accordion-content"> <br>
                            <h4>Examination</h4> <br>
                            <div class="content-container" style="justify-content: center;">
                                <div class="row" style="display: flex; gap: 35px;">
                                    <input class="radio" id="out-patient-radio" type="radio" name="examination" value="Out-Patient">Out-patient
                                    <input class="radio" id="in-patient-radio" type="radio" name="examination" value="In-Patient">In-Patient
                                </div>
                            </div>

                            <!-- Content for Out-patient -->
                            <div class="content-container" id="out-patient" style="width: 64%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="appt-date">Appointment Date</label>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <input type="date" name="appt-date-out" id="appt-date-out">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="appt-time">Appointment Time</label>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <input type="time" name="appt-time-out" id="appt-time-out">
                                    </div>
                                </div>
                            </div>

                            <!-- Content for In-Patient -->
                            <div class="content-container" id="in-patient" style="width: 64%;">
                                <!-- Ward -->
                                <div class="column" style="width: 60%;">
                                    <div class="row">
                                        <label for="ward">Ward</label>
                                        <select name="ward" id="ward">
                                            <option value="" disabled selected>Select a ward</option>
                                            <!-- info from db -->
                                        </select>
                                    </div>
                                </div>

                                <!-- Planned Exit Date -->
                                <div class="column" style="width: 60%;">
                                    <div class="row">
                                        <label for="planned-exit-date">Planned Exit Date</label>
                                        <input type="date" name="planned-edit-date" id="planned-edit-date">
                                    </div>
                                </div>
                            </div>

                            <!-- button -->
                            <div class="submit-examination-btn-container">
                                <button type="button" id="submit-examination-btn">Submit Examination</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/ajax-initial-appointments.js"></script>  
    <script src="../js/ajax-appointment-form-submission.js"></script> -->
</body>

</html>