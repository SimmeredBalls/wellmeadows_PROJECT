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
            <h1>Initial Appointments</h1>
            <section class="initial-appointment-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Upcoming Appointments</summary>
                        <div class="accordion-content"> <br>
                            <h4>Patient Details</h4> <br>
                            <div class="content-container">
                                <select name="patientID" id="patient-details">
                                    <option value="" disabled selected>Select a patient</option>
                                </select>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item" id="initial-appointment-section">
                        <summary class="accordion-header">Appointment Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Appointment</h4> <br>
                            <div class="content-container">
                                <div class="appointment-info-container">
                                    <h6>Full Name:
                                        <span class="patient-name"> Aldrin Said</span>
                                    </h6>
                                    <h6 id="appt-num">Appt Num:
                                        <span class="appointment-number">0001</span>
                                    </h6>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 50%;">
                                    <div class="row">
                                        <label for="exam-room">Exam Room</label>
                                        <input type="text" name="examRoom" id="exam-room" readonly value="E102">
                                    </div>
                                </div>
                                <div class="column" style="width: 45%;">
                                    <div class="row">
                                        <label for="appt">Appointment</label>
                                        <input type="date" name="appointmentDate" id="appt-date" readonly value="2002-12-10">
                                        <input type="time" name="appointmentTime" id="appt-time" readonly value="14:30">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="staff">Staff</label>
                                        <input type="number" name="staffID" id="staff-number" readonly style="width: 60%;" value="1002">
                                    </div>
                                </div>
                            </div>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="conduct-appointment-btn">Conduct Appointment</button>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item" id="conduct-appointments-form">
                        <summary class="accordion-header">Conduct Appointments</summary>
                        <div class="accordion-content"> <br>
                            <h4>Examination</h4> <br>
                            <div class="content-container" style="justify-content: center;">
                                <div class="row" style="display: flex; gap: 35px;">
                                    <input class="radio" id="out-patient-radio" type="radio" name="examination" value="Out-Patient">Out-patient
                                    <input class="radio" id="in-patient-radio" type="radio" name="examination" value="In-Patient">In-Patient
                                </div>
                            </div>

                            <div class="content-container" id="out-patient" style="width: 64%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="appt-date">Appointment Date</label>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <input type="date" name="outPatientAppointmentDate" id="appt-date-out">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="appt-time">Appointment Time</label>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <input type="time" name="outPatientAppointmentTime" id="appt-time-out">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container" id="in-patient" style="width: 64%;">
                                <div class="column" style="width: 60%;">
                                    <div class="row">
                                        <label for="ward">Ward</label>
                                        <select name="wardID" id="ward">
                                            <option value="" disabled selected>Select a ward</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="column" style="width: 60%;">
                                    <div class="row">
                                        <label for="planned-exit-date">Planned Exit Date</label>
                                        <input type="date" name="planned-exit-date" id="planned-edit-date">
                                    </div>
                                </div>
                            </div>

                            <div class="submit-examination-btn-container">
                                <button type="button" id="submit-examination-btn">Submit Examination</button>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
    </body>

</html>