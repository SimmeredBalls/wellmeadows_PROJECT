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
            <h1>Manage Patient Information</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open
                        <summary> class="accordion-header">Patient List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="patientID">Patient Number</option>
                                        <option value="firstName">Patient Name</option>
                                        <option value="sex">Sex</option>
                                        <option value="address">Address</option>
                                        <option value="maritalStatus">Marital Status</option>
                                        <option value="phoneNumber">Tel. Number</option>
                                        <option value="dateOfBirth">Date of Birth</option>
                                        <option value="registrationDate">Date Registered</option>
                                        <option value="nextOfKin">Next-of-Kin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="patient-table">
                                        <thead>
                                            <tr>
                                                <th>Patient #</th>
                                                <th>Patient Name</th>
                                                <th>Sex</th>
                                                <th>Address</th>
                                                <th>Marital Status</th>
                                                <th>Tel. Number</th>
                                                <th>Date of Birth</th>
                                                <th>Date Registered</th>
                                                <th>Next-of-Kin</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Edit Patient Information</summary>
                        <div class="accordion-content" id="edit-form"> <br>
                            <button class="close-btn" id="close-btn">x</button>

                            <h4 class="container2-title">Patient Information</h4> <br>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="patient-num">Patient Number</label>
                                        <input type="number" id="patient-number" name="patientID" style="margin-right: 20px;">
                                    </div>
                                </div>
                            </div>

                            <h3 style="color: #0c8882;">Personal Information</h3> <br>
                            <div class="content-container">
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="patient-name">Patient Name</label>
                                    </div>
                                    <div class="row" style="width: 100%;">
                                        <input type="text" id="first-name" name="firstName" value="Aldrin" style="width: 300px;">
                                        <input type="text" id="last-name" name="lastName" value="Said" style="width: 300px;">
                                    </div>
                                    <div class="row" style="width: 65%; margin-left: 120px; margin-top: -10px;">
                                        <label for="first-name" style="font-size: 12px; font-weight: normal;">First Name</label>
                                        <label for="last-name" style="font-size: 12px; font-weight: normal;">Last Name</label>
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="sex">Sex</label>
                                    </div>
                                    <div class="row">
                                        <select name="sex" id="sex">
                                            <option value="" disabled selected>Sex</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="content-container" style="width: 64.5%">
                                <div class="column">
                                    <div class="row">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="row" style="width: 715px;">
                                        <input type="text" name="address" id="address">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="marital-status">Marital Status</label>
                                    </div>
                                    <div class="row">
                                        <select name="marital-status" id="marital-status">
                                            <option value="" disabled selected>Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Prefer not to say">Prefer not to say</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="content-container" style="width: 67%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="dob">Date of Birth</label>
                                    </div>
                                    <div class="row">
                                        <input type="date" id="dob" name="dateOfBirth">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="tel">Tel. Number</label>
                                    </div>
                                    <div class="row">
                                        <input type="tel" id="tel-number" name="phoneNumber" value="+63 935 826 8263">
                                    </div>
                                </div>
                            </div> <br>

                            <h3 style="color: #0c8882;">Appointment Information</h3>
                            <p style="color: red; font-size: 13.5px;">(Fields in this section are not editable.)</p> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="date-registered">Date Registered</label>
                                    </div>
                                    <div class="row">
                                        <input type="date" id="date-registered" name="registrationDate" readonly>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="next-of-kin">Next-of-Kin</label>
                                    </div>
                                    <div class="column">
                                        <input type="text" id="next-of-kin" name="nextOfKin" value="Colette Vergara-Said (ID: 00031)" readonly>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="update-patient-btn">Edit</button>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>

    </body>

</html>