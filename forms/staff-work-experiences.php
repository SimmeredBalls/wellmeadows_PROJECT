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
            <h1>Staff Work Experience</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <!-- Add Staff Work Experiences -->
                    <div class="accordion-item">
                        <button class="accordion-header">Add a Work Experience</button>
                        <div class="accordion-content"> <br>
                            <h4>Experience Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staff">Staff Number</label>
                                        <select name="staff-number" id="staff-number">
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <!-- Name of Org and Start Date -->
                                <div class="column">
                                    <!-- Name of Org -->
                                    <div class="row">
                                        <label for="name-org-org">Name of Org</label>
                                        <input type="text" name="name-of-org" id="name-of-org">
                                    </div>

                                    <!-- Start of Date -->
                                    <div class="row">
                                        <label for="start-of-date">Start of Date</label>
                                        <input type="date" name="start-of-date" id="start-of-date">
                                    </div>

                                    <div class="row">
                                        <label for="staff">Staff Number</label>
                                        <input type="number" name="staff-number" id="staff-number">
                                    </div>
                                </div>

                                <!-- Position and End of Date -->
                                <div class="column">
                                    <!-- Position -->
                                    <div class="row">
                                        <label for="position">Position</label>
                                        <input type="text" name="position" id="position">
                                    </div>

                                    <!-- End of Date -->
                                    <div class="row">
                                        <label for="end-of-date">End of Date</label>
                                        <input type="date" name="end-of-date" id="end-of-date">
                                    </div>
                                </div>
                            </div> <br> <br>
                            <div class="add-work-exp-btn-container">
                                <button type="button" id="add-work-exp-btn">Add</button>
                            </div> <br>
                        </div>
                    </div>

                    <!-- Manage Staff Work Experience-->
                    <div class="accordion-item">
                        <button class="accordion-header">Manage Staff Work Experience</button>
                        <div class="accordion-content" id="accordion-content-edit" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="ID">ID</option>
                                        <option value="Staff Number">Staff Number</option>
                                        <option value="name-of-org">Name of Org</option>
                                        <option value="position">Position</option>
                                        <option value="start-date">Start Date</option>
                                        <option value="end-date">End Date</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="work-experience-table">
                                        <thead>
                                            <tr>
                                                <th>Work Exp ID</th>
                                                <th>Staff Number</th>
                                                <th>Name of Org</th>
                                                <th>Position</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Work Exp ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Name of Org -->
                                                <td>Angat Buhay</td>

                                                <!-- Position -->
                                                <td>Standing</td>

                                                <!-- Start Date -->
                                                <td>2024-12-10</td>

                                                <!-- End Date -->
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <!-- Work Exp ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Name of Org -->
                                                <td>Angat Buhay</td>

                                                <!-- Position -->
                                                <td>Standing</td>

                                                <!-- Start Date -->
                                                <td>2024-12-10</td>

                                                <!-- End Date -->
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <!-- Work Exp ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Name of Org -->
                                                <td>Angat Buhay</td>

                                                <!-- Position -->
                                                <td>Standing</td>

                                                <!-- Start Date -->
                                                <td>2024-12-10</td>

                                                <!-- End Date -->
                                                <td>2025-12-10</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>

                            <!-- View and Update Container -->
                            <div class="container2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Staff Work Experience</h4> <br>
                                <!-- Work Exp Number -->
                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="work-exp-num">Work Exp Number</label>
                                            <input type="number" name="work-exp-number" id="work-exp-number" readonly style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <!-- Staff Number -->
                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="staff-num">Staff Number</label>
                                            <input type="number" name="staff-number" id="staff-number" readonly style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <h3 style="color: #0c8882;">Work Experience Information</h3> <br>
                                <!-- Name of Org and Start Date -->
                                <div class="content-container">
                                    <!-- Name of Org and Start Date -->
                                    <div class="column">
                                        <!-- Name of Org -->
                                        <div class="row">
                                            <label for="name-org-org">Name of Org</label>
                                            <input type="text" name="name-of-org" id="name-of-org">
                                        </div>

                                        <!-- Start of Date -->
                                        <div class="row">
                                            <label for="start-of-date">Start of Date</label>
                                            <input type="date" name="start-of-date" id="start-of-date">
                                        </div>
                                    </div>

                                    <!-- Position and End of Date -->
                                    <div class="column">
                                        <!-- Position -->
                                        <div class="row">
                                            <label for="position">Position</label>
                                            <input type="text" name="position" id="position">
                                        </div>

                                        <!-- End of Date -->
                                        <div class="row">
                                            <label for="end-of-date">End of Date</label>
                                            <input type="date" name="end-of-date" id="end-of-date">
                                        </div>

                                    </div>
                                </div>
                                <div class="edit-work-exp-btn-container">
                                    <button type="button" id="edit-work-exp-btn">Edit</button>
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
    <script src="../js/ajax-work-exp.js"></script> -->
</body>

</html>