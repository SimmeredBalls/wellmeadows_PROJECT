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
            <h1>Local Doctor Information</h1>
            <section class="add-new-doctor-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Add Doctor</summary>
                        <div class="accordion-content"> <br>
                            <h4>Add Local Doctor Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="first_name">First Name</label>
                                        <input type="text" name="firstName" id="first-name">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="last-name">Last Name</label>
                                        <input type="text" name="lastName" id="last-name">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="phone-number">Phone Number</label>
                                        <input type="tel" name="phoneNumber" id="phone-input">
                                    </div>
                                </div>
                            </div>
                            <div class="add-doctor-btn-container">
                                <button type="button" id="add-doctor-btn">Add Doctor</button>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Edit Doctor</summary>
                        <div class="accordion-content" id="accordion-content-edit"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="clinicNumber">Clinic Number</option>
                                        <option value="doctorName">Doctor Name</option>
                                        <option value="address">Address</option>
                                        <option value="phoneNumber">Phone Number</option>
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
                                                <td>0001</td>
                                                <td>Doctor KwakKwak</td>
                                                <td>Sampaloc Drive, Talon-Talon, Zamboanga City, Philippines</td>
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container2">
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Doctor Information</h4> <br>
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="supplier-num">Clinic Number</label>
                                            <input type="number" id="clinic-number" name="clinicNumber" value="0001" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column" style="width: 87%;">
                                        <div class="row" style="width: 88%;">
                                            <label for="patient-name"> Name</label>
                                            <input type="text" name="firstName" id="first-name" value="Aldrin" style="width: 250px;">
                                            <input type="text" name="lastName" id="last-name" value="Said" style="width: 250px;">
                                        </div>
                                        <div class="row" style="width: 50%; margin-left: 220px; margin-top: -10px;">
                                            <label for="first-name" style="font-size: 12px; font-weight: normal;">First Name</label>
                                            <label for="last-name" style="font-size: 12px; font-weight: normal;">Last Name</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column">
                                        <div class="row" style="width: 880px; ">
                                            <label for="address">Address</label>
                                            <input style="margin-left: 60px;" type="text" name="address" id="address">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="local-doctor-phone-number">Phone Number</label>
                                            <input type="tel" name="phoneNumber" id="local-doctor-phone-number" value="+63 935 826 8263">
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="update-doctor-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
    </body>

</html>