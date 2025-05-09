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
            <h1>Manage Suppliers</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Supplier List</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="supplierID">ID</option>
                                        <option value="supplierName">Name</option>
                                        <option value="address">Address</option>
                                        <option value="email">Email</option>
                                        <option value="phoneNumber">Tel. Number</option>
                                        <option value="faxNumber">Fax Number</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="supplier-table">
                                        <thead>
                                            <tr>
                                                <th>Supplier #</th>
                                                <th>Supplier Name</th>
                                                <th>Address</th>
                                                <th>Email</th>
                                                <th>Tel. Number</th>
                                                <th>Fax Number</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>0001</td>
                                                <td>Shenzheng Sorting Center</td>
                                                <td>Sampaloc Drive, Talon-Talon, Zamboanga City, Philippines</td>
                                                <td>sample_username@gmail.com</td>
                                                <td>+63 35 826 8263</td>
                                                <td>00022412</td>
                                            </tr>
                                            <tr>
                                                <td>0001</td>
                                                <td>Shenzheng Sorting Center</td>
                                                <td>Sampaloc Drive, Talon-Talon, Zamboanga City, Philippines</td>
                                                <td>sample_username@gmail.com</td>
                                                <td>+63 35 826 8263</td>
                                                <td>00022412</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Edit Supplier Information</summary>
                        <div class="accordion-content"> <br>
                            <button class="close-btn" id="close-btn">x</button>
                            <h4 class="container2-title">Supplier Information</h4> <br>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-num">Supplier Number</label>
                                        <input type="number" name="supplierID" id="supplier-number" value="0001" readonly style="margin-right: 20px;">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 970px;">
                                        <label for="patient-name">Supplier Name</label>
                                        <input type="text" name="supplierName" id="supplier-name" value="Shenzheng Sorting Center" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 970px;">
                                        <label for="address">Address</label>
                                        <input style="margin-left: 83px;" type="text" name="address" id="address">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-tel-number">Tel. Number</label>
                                        <input type="tel" style="margin-right: 20px;" name="phoneNumber" id="supplier-tel-number" value="+63 935 826 8263">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-fax-number">Fax Number</label>
                                        <input type="number" name="faxNumber" id="supplier-fax-number" value="00022412">
                                    </div>
                                </div>
                            </div> <br>
                            <div class="conduct-appointment-btn-container">
                                <button type="button" id="conduct-appointment-btn">Edit</button>
                            </div>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
</body>

</html>