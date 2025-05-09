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


    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Wellmeadows Hospital</title>
        <link rel="stylesheet" href="../css/styles.css">
    </head>

    <div class="wrapper">
        <div class="container">
            <h1>Manage Staff Information</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Staff List -->
                    <div class="accordion-item">
                        <button class="accordion-header">Staff List</button>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="staff-number">Staff Number</option>
                                        <option value="staff-name">Staff Name</option>
                                        <option value="staff-sex">Sex</option>
                                        <option value="staff-addr">Address</option>
                                        <option value="staff-phone-num">Phone Number</option>
                                        <option value="ward-number">Ward Number</option>
                                        <option value="staff-dob">Date of Birth</option>
                                        <option value="insurance-number">Insurance Number</option>
                                        <option value="salary-scale">Salary Scale</option>
                                        <option value="staff-position">Position</option>
                                        <option value="current-salary">Current Salary</option>
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

                            <!-- View and Update Container -->
                            <div class="container2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Staff Information</h4> <br>

                                <!-- Staff Number -->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="staff-num">Staff Number</label>
                                            <input type="number" id="staff-number" readonly style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <h3 style="color: #0c8882;">Personal Information</h3> <br>
                                <!-- Staff Name and Sex -->
                                <div class="content-container">
                                    <!-- Staff Name -->
                                    <div class="column" style="width: 100%;">
                                        <div class="row">
                                            <label for="staff-name">Staff Name</label>
                                        </div>
                                        <div class="row" style="width: 100%;">
                                            <input type="text" id="first-name" value="Aldrin" readonly style="width: 300px;">
                                            <input type="text" id="last-name" value="Said" readonly style="width: 300px;">
                                        </div>
                                        <div class="row" style="width: 65%; margin-left: 120px; margin-top: -10px;">
                                            <label for="first-name" style="font-size: 12px; font-weight: normal;">First Name</label>
                                            <label for="last-name" style="font-size: 12px; font-weight: normal;">Last Name</label>
                                        </div>
                                    </div>

                                    <!-- Staff Sex -->
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

                                <!-- Staff Address-->
                                <div class="content-container">
                                    <div class="column" style="width: 64.5%">
                                        <div class="row">
                                            <label for="address">Address</label>
                                        </div>
                                        <div class="row" style="width: 715px;">
                                            <input type="text" name="staff-address" id="address">
                                        </div>
                                    </div>

                                    <!-- Staff Phone Number-->
                                    <div class="column">
                                        <div class="row">
                                            <label for="phone-number">Phone Number</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="staff-phone-number" id="phone-number">
                                        </div>
                                    </div>
                                </div>

                                <!--  Date of Birth and Ward Number -->
                                <div class="content-container" style="width: 67%;">
                                    <!-- Date of Birth -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="dob">Date of Birth</label>
                                        </div>
                                        <div class="row">
                                            <input type="date" id="dob">
                                        </div>
                                    </div>

                                    <!-- Ward Number -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="ward-number">Ward Number</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" id="ward-number">
                                        </div>
                                    </div>
                                </div> <br>

                                <h3 style="color: #0c8882;">Employment Details</h3>
                                <div class="content-container">
                                    <div class="column">
                                        <!-- Insurance Number -->
                                        <div class="row">
                                            <label for="insurance-number">Insurance Number</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" id="insurance-number">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <!-- Salary Scale -->
                                        <div class="row">
                                            <label for="salary-scale">Salary Scale</label>
                                        </div>
                                        <div class="column">
                                            <select name="salary-scale" id="salary-scale">
                                                <option value="" disabled selected>Choose salary scale</option>
                                                <option value="15,000 - 20,000">15,000 - 20,000</option>
                                                <option value="20,000 - 30,000">20,000 - 30,000</option>
                                                <option value="30,000 - 40,000">30,000 - 40,000</option>
                                                <option value="40, 000 - Above">40, 000 - Above</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="column" style="margin-left: 30px;">
                                        <!-- Position -->
                                        <div class="row">
                                            <label for="position">Position</label>
                                        </div>
                                        <div class="column">
                                            <select name="staff-position" id="position">
                                                <option value="" disabled selected>Choose a position</option>
                                                <option value="Medical Doctor">Medical Doctor</option>
                                                <option value="Personnel Officer">Personal Officer</option>
                                                <option value="Charge Nurse">Charge Nurse</option>
                                                <option value="Specialist Staff">Specialist Staff</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="content-container">
                                    <div class="column">
                                        <!-- Current Salary -->
                                        <div class="row">
                                            <label for="current-salary">Current Salary</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" id="current-salary">
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="conduct-appointment-btn">Edit</button>
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
    <script src="../js/ajax-staff.js"></script> -->
</body>

</html>