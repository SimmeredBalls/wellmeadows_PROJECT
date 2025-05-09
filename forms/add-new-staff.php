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
            <h1>Add a Staff</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <details class="accordion-item">
                        <summary class="accordion-header">Staff Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Staff Details</h4> <br>
                            <h4 style="color: #0c8882;">Personal Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="first-name">First Name</label>
                                        <input type="text" name="s_firstName" id="first-name">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" name="s_lastName" id="last-name">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="s_address" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="gender">Gender</label>
                                        <select id="gender" name="s_sex">
                                            <option value="" disabled selected>Choose a gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <label for="phone-input">Phone Number</label>
                                        <input type="tel" name="s_telephone" id="phone-input">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="date-of-birth">Date of Birth</label>
                                        <input type="date" name="s_dateOfBirth" id="date-of-birth">
                                    </div>

                                    <div class="row">
                                        <label for="ward">Ward</label>
                                        <select name="wardID" id="ward">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <h4 style="color: #0c8882;">Employment Details</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="nationalInsuranceNumber">Insurance Number</label>
                                        <input type="number" name="s_nationalInsuranceNumber" id="nationalInsuranceNumber">
                                    </div>

                                    <div class="row">
                                        <label for="salary-scale">Salary Scale</label>
                                        <select name="s_salaryScale" id="salary-scale">
                                            <option value="" disabled selected>Choose salary scale</option>
                                            <option value="15,000 - 20,000">15,000 - 20,000</option>
                                            <option value="20,000 - 30,000">20,000 - 30,000</option>
                                            <option value="30,000 - 40,000">30,000 - 40,000</option>
                                            <option value="40, 000 - Above">40, 000 - Above</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="position">Position</label>
                                        <select name="s_position" id="position">
                                            <option value="" disabled selected>Choose a position</option>
                                            <option value="Medical Doctor">Medical Doctor</option>
                                            <option value="Personnel Officer">Personnel Officer</option>
                                            <option value="Charge Nurse">Charge Nurse</option>
                                            <option value="Specialist Staff">Specialist Staff</option>
                                        </select>
                                    </div>

                                    <div class="row">
                                        <label for="current-salary">Current Salary</label>
                                        <input type="number" id="current-salary" name="s_currentSalary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Staff Contract</summary>
                        <div class="accordion-content"> <br>
                            <h4>Contract Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="contract-type">Contract Type</label>
                                        <select name="s_contractType" id="contract-type" style="width: 60%;">
                                            <option value="" disabled selected>Choose a type of contract</option>
                                            <option value="Temporary">Temporary</option>
                                            <option value="Permanent">Permanent</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="hoursPerWeek">Number of Hours</label>
                                        <input type="number" name="s_hoursPerWeek" id="hoursPerWeek" style="width: 55%;">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="type-of-salary">Type of Salary</label>
                                        <select name="s_paymentType" id="type-of-salary" style="width: 60%;">
                                            <option value="" disabled selected>Choose type of salary</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Monthly">Monthly</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <br> <br>
                        </div>
                    </details>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-staff-btn">Add Staff</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>
</body>
</html>