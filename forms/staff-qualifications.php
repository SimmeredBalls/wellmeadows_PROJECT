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
            <h1>Staff Qualifications</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Add a Qualification</summary>
                        <div class="accordion-content"> <br>
                            <h4>Qualification Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staffID">Staff Number</label>
                                        <input type="text" name="staffID" id="staff-number" style="width: 55%;">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="qualificationType">Type/Program</label>
                                        <input type="text" name="qualificationType" id="qualification-type" style="width: 55%;">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="qualificationDate">Qualification Date</label>
                                        <input type="date" name="qualificationDate" id="date-of-qualification" style="width: 55%;">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="instituteName">Institute Name</label>
                                        <input type="text" name="instituteName" id="institute-name" style="width: 55%;">
                                    </div>
                                </div>
                            </div> <br> <br>
                            <div class="add-qualification-btn-container">
                                <button type="button" id="add-qualification-btn">Add</button>
                            </div> <br>
                        </div>
                    </details>
                    <details class="accordion-item">
                        <summary class="accordion-header">Manage Staff Qualifications</summary>
                        <div class="accordion-content" id="accordion-content-edit" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="qualificationID">Qualification ID</option>
                                        <option value="staffID">Staff Number</option>
                                        <option value="qualificationType">Type/Program</option>
                                        <option value="qualificationDate">Qualification Date</option>
                                        <option value="instituteName">Institute Name</option>
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
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>BS Information Technology</td>
                                                <td>2024-12-10</td>
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>BS Information Technology</td>
                                                <td>2024-12-10</td>
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>BS Information Technology</td>
                                                <td>2024-12-10</td>
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>BS Information Technology</td>
                                                <td>2024-12-10</td>
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>BS Information Technology</td>
                                                <td>2024-12-10</td>
                                                <td>Western Mindanao State University</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container2">
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Staff Qualification</h4> <br>
                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="qualificationID">Qualification Number</label>
                                            <input type="number" name="qualificationID" id="qualification-number" readonly style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="staffID">Staff Number</label>
                                            <input type="number" name="staffID" id="staff-number" readonly style="margin-right: 20px;">
                                        </div>
                                    </div>
                                </div>

                                <h3 style="color: #0c8882;">Qualification Information</h3> <br>
                                <div class="content-container">
                                    <div class="column" style="width: 100%;">
                                        <div class="row">
                                            <label for="qualificationType">Type/Program</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="qualificationType" id="type/program">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="qualificationDate">Qualification Date</label>
                                        </div>
                                        <div class="row">
                                            <input type="date" name="qualificationDate" id="qualification-date">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="instituteName">Institute Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="instituteName" id="institute-name">
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-qualification-btn-container">
                                    <button type="button" id="edit-qualification-btn">Edit</button>
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