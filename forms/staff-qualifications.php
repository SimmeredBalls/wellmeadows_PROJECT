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
            <h1>Staff Qualifications</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <!-- Add Staff Qualifications -->
                    <div class="accordion-item">
                        <button class="accordion-header">Add a Qualification</button>
                        <div class="accordion-content"> <br>
                            <h4>Qualification Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staff">Staff Number</label>
                                        <input type="text" name="institute-name" id="staff-number" style="width: 55%;">
                                        <!-- <label for="staff">Staff Number</label>
                                        <select style="margin-right: 78px;" na  me="staff-number" id="staff-number">
                                        </select> -->
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <!-- Qualification Type, Date of Qualification, Institute Name -->
                                <div class="column">
                                    <!-- Qualification Type -->
                                    <div class="row">
                                        <label for="qualification-type">Type/Program</label>
                                        <input type="text" name="qualification-type" id="qualification-type" style="width: 55%;">
                                    </div>
                                </div>
                                <div class="column">
                                    <!-- Date of Qualification -->
                                    <div class="row">
                                        <label for="date-for-qualification">Qualification Date</label>
                                        <input type="date" name="date-of-qualification" id="date-of-qualification" style="width: 55%;">
                                    </div>

                                </div>
                                <div class="column">
                                    <!-- Institute Name -->
                                    <div class="row">
                                        <label for="institute-name">Institute Name</label>
                                        <input type="text" name="institute-name" id="institute-name" style="width: 55%;">
                                    </div>
                                </div>
                            </div> <br> <br>
                            <div class="add-qualification-btn-container">
                                <button type="button" id="add-qualification-btn">Add</button>
                            </div> <br>
                        </div>
                    </div>
                    <!-- Manage Staff Qualifications-->
                    <div class="accordion-item">
                        <button class="accordion-header">Manage Staff Qualifications</button>
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
                                        <option value="staff-type">Type/Program</option>
                                        <option value="qualification-date">Qualification Date</option>
                                        <option value="institute-name">Institute Name</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="qualification-table">
                                        <thead>
                                            <tr>
                                                <th>Qualification ID</th>
                                                <th>Staff Number</th>
                                                <th>Type/Program</th>
                                                <th>Qualification Date</th>
                                                <th>Institute Name</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Qualification ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Type/Program -->
                                                <td>BS Information Technology</td>

                                                <!-- Qualification Date -->
                                                <td>2024-12-10</td>

                                                <!-- Institute Name -->
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <!-- Qualification ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Type/Program -->
                                                <td>BS Information Technology</td>

                                                <!-- Qualification Date -->
                                                <td>2024-12-10</td>

                                                <!-- Institute Name -->
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <!-- Qualification ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Type/Program -->
                                                <td>BS Information Technology</td>

                                                <!-- Qualification Date -->
                                                <td>2024-12-10</td>

                                                <!-- Institute Name -->
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <!-- Qualification ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Type/Program -->
                                                <td>BS Information Technology</td>

                                                <!-- Qualification Date -->
                                                <td>2024-12-10</td>

                                                <!-- Institute Name -->
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <!-- Qualification ID -->
                                                <td>000324</td>

                                                <!-- Staff Number -->
                                                <td>0001</td>

                                                <!-- Type/Program -->
                                                <td>BS Information Technology</td>

                                                <!-- Qualification Date -->
                                                <td>2024-12-10</td>

                                                <!-- Institute Name -->
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                    </table>
                                </div>
                            </div>

                            <!-- View and Update Container -->
                            <div class="container2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Staff Qualification</h4> <br>
                                <!-- Qualification Number -->
                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="qualification-num">Qualification Number</label>
                                            <input type="number" name="qualification-number" id="qualification-number" readonly style="margin-right: 20px;">
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

                                <h3 style="color: #0c8882;">Qualification Information</h3> <br>
                                <!-- Type/Program, Qualification Date and Institute Name -->
                                <div class="content-container">
                                    <!-- Type/Program -->
                                    <div class="column" style="width: 100%;">
                                        <div class="row">
                                            <label for="type/program">Type/Program</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="name/program" id="type/program" readonly>
                                        </div>
                                    </div>
                                    <!-- Qualification Date -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="qualification-date">Qualification Date</label>
                                        </div>
                                        <div class="row">
                                            <input type="date" name="qualification-date" id="qualification-date" readonly>
                                        </div>
                                    </div>

                                    <!-- Institute Name -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="institute-name">Institute Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="institute-name" id="institute-name" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-qualification-btn-container">
                                    <button type="button" id="edit-qualification-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/ajax-qualifs.js"></script> -->
</body>

</html>