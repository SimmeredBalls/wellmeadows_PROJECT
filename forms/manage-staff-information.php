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
            <h1>Manage Staff Information</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Staff List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="staffID">Staff Number</option>
                                        <option value="firstName">Staff Name</option>
                                        <option value="sex">Sex</option>
                                        <option value="address">Address</option>
                                        <option value="phoneNumber">Phone Number</option>
                                        <option value="wardNumber">Ward Number</option>
                                        <option value="dateOfBirth">Date of Birth</option>
                                        <option value="insuranceNumber">Insurance Number</option>
                                        <option value="salaryScale">Salary Scale</option>
                                        <option value="position">Position</option>
                                        <option value="currentSalary">Current Salary</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="staff-table">
                                        <thead>
                                            <tr>
                                                <th>Staff #</th>
                                                <th>Staff Name</th>
                                                <th>Sex</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Date of Birth</th>
                                                <th>Ward Number</th>
                                                <th>Insurance Number</th>
                                                <th>Salary Scale</th>
                                                <th>Position</th>
                                                <th>Current Salary</th>
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
                        <summary class="accordion-header">Edit Staff Information</summary>
                        <div class="accordion-content"> <br>
                            <button class="close-btn" id="close-btn">x</button>

                            <h4 class="container2-title">Staff Information</h4> <br>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staff-num">Staff Number</label>
                                        <input type="number" id="staff-number" name="staffID" readonly style="margin-right: 20px;">
                                    </div>
                                </div>
                            </div>

                            <h3 style="color: #0c8882;">Personal Information</h3> <br>
                            <div class="content-container">
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="staff-name">Staff Name</label>
                                    </div>
                                    <div class="row" style="width: 100%;">
                                        <input type="text" id="first-name" name="firstName" value="Aldrin" readonly style="width: 300px;">
                                        <input type="text" id="last-name" name="lastName" value="Said" readonly style="width: 300px;">
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

                            <div class="content-container">
                                <div class="column" style="width: 64.5%">
                                    <div class="row">
                                        <label for="address">Address</label>
                                    </div>
                                    <div class="row" style="width: 715px;">
                                        <input type="text" name="address" id="address">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="phone-number">Phone Number</label>
                                    </div>
                                    <div class="row">
                                        <input type="tel" name="phoneNumber" id="phone-number">
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
                                        <label for="ward-number">Ward Number</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" id="ward-number" name="wardNumber">
                                    </div>
                                </div>
                            </div> <br>

                            <h3 style="color: #0c8882;">Employment Details</h3>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="insurance-number">Insurance Number</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" id="insurance-number" name="insuranceNumber">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="salary-scale">Salary Scale</label>
                                    </div>
                                    <div class="column">
                                        <select name="salaryScale" id="salary-scale">
                                            <option value="" disabled selected>Choose salary scale</option>
                                            <option value="15000-20000">15,000 - 20,000</option>
                                            <option value="20001-30000">20,001 - 30,000</option>
                                            <option value="30001-40000">30,001 - 40,000</option>
                                            <option value="40001-Above">40, 001 - Above</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column" style="margin-left: 30px;">
                                    <div class="row">
                                        <label for="position">Position</label>
                                    </div>
                                    <div class="column">
                                        <select name="position" id="position">
                                            <option value="" disabled selected>Choose a position</option>
                                            <option value="Medical Doctor">Medical Doctor</option>
                                            <option value="Personnel Officer">Personnel Officer</option>
                                            <option value="Charge Nurse">Charge Nurse</option>
                                            <option value="Specialist Staff">Specialist Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="current-salary">Current Salary</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" id="current-salary" name="currentSalary">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="update-staff-btn">Edit</button>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>

    </body>

</html>