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
            <h1>Local Doctor Information</h1>
            <section class="add-new-doctor-section">
                <div class="accordion">
                    <!-- Add Local Doctor -->
                    <div class="accordion-item">
                        <button class="accordion-header">Add Doctor</button>
                        <div class="accordion-content"> <br>
                            <h4>Add Local Doctor Information</h4> <br>
                            <div class="content-container">
                                <!-- First Column -->
                                <div class="column">
                                    <!-- First Name -->
                                    <div class="row">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="local-doctor-first-name" id="first-name">
                                    </div>
                                </div>

                                <!-- Second Column -->
                                <div class="column">
                                    <!-- Last Name -->
                                    <div class="row">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" name="local-doctor-last-name" id="last-name">
                                    </div>
                                </div>
                            </div>
                            <!-- Local Doctor Address -->
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="local-doctor-address" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <!-- Phone -->
                                    <div class="row">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="tel" name="local-doctor-phone-input" id="phone-input">
                                    </div>
                                </div>
                            </div>
                            <div class="add-doctor-btn-container">
                                <button type="button" id="add-doctor-btn">Add Doctor</button>
                            </div>
                        </div>
                    </div>

                    <!-- Edit Local Doctor -->
                    <div class="accordion-item">
                        <button class="accordion-header">Edit Doctor</button>
                        <div class="accordion-content" id="accordion-content-edit"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="clinic-number">Clinic Number</option>
                                        <option value="doctor-name">Doctor Name</option>
                                        <option value="address">Address</option>
                                        <option value="phone number">Phone Number</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="local-doctor-table">
                                        <thead>
                                            <tr>
                                                <th>Clinic #</th>
                                                <th>Doctor Name</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Clinic Number -->
                                                <td>0001</td>

                                                <!-- Doctor Name -->
                                                <td>Doctor KwakKwak</td>

                                                <!-- Address -->
                                                <td>Sampaloc Drive, Talon-Talon, Zamboanga City, Philippines</td>

                                                <!-- Phone Number -->
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- View and Update Container -->
                            <div class="container2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Doctor Information</h4> <br>
                                <!-- Clinic Number -->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="supplier-num">Clinic Number</label>
                                            <input type="number" id="clinic-number" value="0001" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <!-- Doctor Name -->
                                    <div class="column" style="width: 87%;">
                                        <div class="row" style="width: 88%;">
                                            <label for="patient-name"> Name</label>
                                            <input type="text" name="doctor-first-name" id="first-name" value="Aldrin" readonly style="width: 250px;">
                                            <input type="text" name="doctor-last-name" id="last-name" value="Said" readonly style="width: 250px;">
                                        </div>
                                        <div class="row" style="width: 50%; margin-left: 220px; margin-top: -10px;">
                                            <label for="first-name" style="font-size: 12px; font-weight: normal;">First Name</label>
                                            <label for="last-name" style="font-size: 12px; font-weight: normal;">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor Address-->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row" style="width: 880px; ">
                                            <label for="address">Address</label>
                                            <input style="margin-left: 60px;" type="text" name="local-doctor-address" id="address">
                                        </div>
                                    </div>
                                </div>

                                <!-- Doctor Phone Number -->
                                <div class="content-container">
                                    <!-- Doctor Phone Number -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="local-doctor-phone-number">Phone Number</label>
                                            <input type="tel" name="local-doctor-phone-number" id="local-doctor-phone-number" value="+63 935 826 8263">
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="conduct-appointment-btn">Edit</button>
                                </div>
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
    <script src="../js/ajax-local-doctor.js"></script> -->
</body>

</html>