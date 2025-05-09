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
            <h1>Staff Work Experience</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Add a Work Experience</summary>
                        <div class="accordion-content"> <br>
                            <h4>Experience Information</h4> <br>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staffID">Staff Number</label>
                                        <select name="staffID" id="staff-number">
                                            <option value="" disabled selected>Select Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="organizationName">Name of Org</label>
                                        <input type="text" name="organizationName" id="name-of-org">
                                    </div>
                                    <div class="row">
                                        <label for="startDate">Start Date</label>
                                        <input type="date" name="startDate" id="start-of-date">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="position">Position</label>
                                        <input type="text" name="position" id="position">
                                    </div>
                                    <div class="row">
                                        <label for="endDate">End Date</label>
                                        <input type="date" name="endDate" id="end-of-date">
                                    </div>
                                </div>
                            </div> <br> <br>
                            <div class="add-work-exp-btn-container">
                                <button type="button" id="add-work-exp-btn">Add</button>
                            </div> <br>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Manage Staff Work Experience</summary>
                        <div class="accordion-content" id="accordion-content-edit" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="workExperienceID">Work Exp ID</option>
                                        <option value="staffID">Staff Number</option>
                                        <option value="organizationName">Name of Org</option>
                                        <option value="position">Position</option>
                                        <option value="startDate">Start Date</option>
                                        <option value="endDate">End Date</option>
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
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>Angat Buhay</td>
                                                <td>Standing</td>
                                                <td>2024-12-10</td>
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>Angat Buhay</td>
                                                <td>Standing</td>
                                                <td>2024-12-10</td>
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>Angat Buhay</td>
                                                <td>Standing</td>
                                                <td>2024-12-10</td>
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>Angat Buhay</td>
                                                <td>Standing</td>
                                                <td>2024-12-10</td>
                                                <td>2025-12-10</td>
                                            </tr>
                                            <tr>
                                                <td>000324</td>
                                                <td>0001</td>
                                                <td>Angat Buhay</td>
                                                <td>Standing</td>
                                                <td>2024-12-10</td>
                                                <td>2025-12-10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="container2">
                                <button class="close-btn" id="close-btn">x</button>

                                <h4 class="container2-title">Staff Work Experience</h4> <br>
                                <div class="content-container">
                                    <div class="column" style="width: 45%;">
                                        <div class="row">
                                            <label for="workExperienceID">Work Exp Number</label>
                                            <input type="number" name="workExperienceID" id="work-exp-number" readonly style="margin-right: 20px;">
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

                                <h3 style="color: #0c8882;">Work Experience Information</h3> <br>
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="organizationName">Name of Org</label>
                                            <input type="text" name="organizationName" id="name-of-org">
                                        </div>
                                        <div class="row">
                                            <label for="startDate">Start Date</label>
                                            <input type="date" name="startDate" id="start-of-date">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="position">Position</label>
                                            <input type="text" name="position" id="position">
                                        </div>
                                        <div class="row">
                                            <label for="endDate">End Date</label>
                                            <input type="date" name="endDate" id="end-of-date">
                                        </div>
                                    </div>
                                </div>
                                <div class="edit-work-exp-btn-container">
                                    <button type="button" id="edit-work-exp-btn">Edit</button>
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