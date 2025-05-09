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

    <div class="wrapper">
        <div class="container">
            <h1>Manage Patient Information</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Patient List -->
                    <div class="accordion-item">
                        <button class="accordion-header">Patient List</button>
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
                                        <option value="patient-number">Patient Number</option>
                                        <option value="patient-name">Patient Name</option>
                                        <option value="patient-sex">Sex</option>
                                        <option value="patient-addr">Address</option>
                                        <option value="patient-marital-status">Marital Status</option>
                                        <option value="patient-tel-num">Tel. Number</option>
                                        <option value="patient-dob">Date of Birth</option>
                                        <option value="date-registered">Date Registered</option>
                                        <option value="next-of-kin">Next-of-Kin</option>
                                        
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

                            <!-- View and Update Container -->
                            <div class="container2" id="edit-form">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Patient Information</h4> <br>

                                <!-- Patient Number -->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="patient-num">Patient Number</label>
                                            <input type="number" id="patient-number"  style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <h3 style="color: #0c8882;">Personal Information</h3> <br>
                                <!-- Patient Name and Sex -->
                                <div class="content-container">
                                    <!-- Patient Name -->
                                    <div class="column" style="width: 100%;">
                                        <div class="row">
                                            <label for="patient-name">Patient Name</label>
                                        </div>
                                        <div class="row" style="width: 100%;">
                                            <input type="text" id="first-name" value="Aldrin" style="width: 300px;">
                                            <input type="text" id="last-name" value="Said" style="width: 300px;">
                                        </div>
                                        <div class="row" style="width: 65%; margin-left: 120px; margin-top: -10px;">
                                            <label for="first-name" style="font-size: 12px; font-weight: normal;">First Name</label>
                                            <label for="last-name" style="font-size: 12px; font-weight: normal;">Last Name</label>
                                        </div>
                                    </div>

                                    <!-- Patient Sex -->
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

                                <!-- Patient Address-->
                                <div class="content-container">
                                    <div class="column" style="width: 64.5%">
                                        <div class="row">
                                            <label for="address">Address</label>
                                        </div>
                                        <div class="row" style="width: 715px;">
                                            <input type="text" name="patient-address" id="address">
                                        </div>
                                    </div>

                                    <!-- Patient Marital Status -->
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

                                <!--  Marital Status, Date of Birth, Tel. Number -->
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

                                    <!-- Patient Tel. Number -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="tel">Tel. Number</label>
                                        </div>
                                        <div class="row">
                                            <input type="tel" id="tel-number" value="+63 935 826 8263">
                                        </div>
                                    </div>
                                </div> <br>

                                <h3 style="color: #0c8882;">Appointment Information</h3>
                                <p style="color: red; font-size: 13.5px;">(Fields in this section are not editable.)</p> <br>
                                <div class="content-container">
                                    <div class="column">
                                        <!-- Date Registered -->
                                        <div class="row">
                                            <label for="date-registered">Date Registered</label>
                                        </div>
                                        <div class="row">
                                            <input type="date" id="date-registered" readonly>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <!-- Next-of-Kin -->
                                        <div class="row">
                                            <label for="next-of-kin">Next-of-Kin</label>
                                        </div>
                                        <div class="column">
                                            <input type="text" id="next-of-kin" value="Colette Vergara-Said (ID: 00031)" readonly>
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
    <script src="../js/ajax-patient.js"></script> -->
</body>

</html>