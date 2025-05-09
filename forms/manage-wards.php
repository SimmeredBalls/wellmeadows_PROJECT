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
            <h1>Manage Wards</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Wards List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="wardID">Ward ID</option>
                                        <option value="wardName">Ward Name</option>
                                        <option value="location">Location</option>
                                        <option value="numberOfBeds">Number of Beds</option>
                                        <option value="telephoneNumber">Tel. Number</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="ward-table">
                                        <thead>
                                            <tr>
                                                <th>Ward ID</th>
                                                <th>Ward Name</th>
                                                <th>Location</th>
                                                <th>Number of Beds</th>
                                                <th>Tel. Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0001</td>
                                                <td>Shenzheng Sorting Center</td>
                                                <td>Basta nasa Hospital lang dapit</td>
                                                <td>15</td>
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                            <tr>
                                                <td>0001</td>
                                                <td>Shenzheng Sorting Center</td>
                                                <td>Basta nasa Hospital lang dapit</td>
                                                <td>15</td>
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="container2">
                                <button class="close-btn" id="close-btn">x</button>
                                <h4 class="container2-title">Ward Information</h4> <br>

                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="wardID">Ward ID</label>
                                            <input type="number" name="wardID" id="wardID" value="0001" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="wardName">Ward Name</label>
                                            <input type="text" name="wardName" id="wardName" value="Shenzheng Sorting Center">
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="location">Location</label>
                                            <input type="text" name="location" id="location">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="numberOfBeds">Number of Beds</label>
                                            <input type="number" name="numberOfBeds" id="numberOfBeds" value="00022412">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="telephoneNumber">Tel. Number</label>
                                            <input type="tel" name="telephoneNumber" id="telephoneNumber" value="+63 935 826 8263">
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="edit-ward-btn">Edit</button>
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