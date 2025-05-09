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
            <h1>Hospital Supplies</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Pharmaceutical Supplies -->
                    <div class="accordion-item">
                        <button class="accordion-header">Pharmaceutical Supplies</button>
                        <div class="accordion-content" id="accordion-content-1" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="drug-number">Drug Number</option>
                                        <option value="drug-name">Drug Name</option>
                                        <option value="dosage">Dosage</option>
                                        <option value="stock-qtty">Stock Quantity</option>
                                        <option value="cost-per-unit">Cost Per Unit</option>
                                        <option value="reorder-level">Reorder Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="pharma-table">
                                        <thead>
                                            <tr>
                                                <th>Drug Number</th>
                                                <th>Drug Name</th>
                                                <th>Dosage</th>
                                                <th>Stock Quantity</th>
                                                <th>Cost Per Unit</th>
                                                <th>Reorder Level</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 135px;">
                                <!-- For Description and Method of Administration -->
                                <div class="column">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="phar-supply-description" id="phar-supply-description" readonly></textarea>
                                    </div>
                                </div>
                                <div class="column" style="margin-left: 80px;">
                                    <div class="row">
                                        <label for="method-admin">Method of Administration</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="phar-method-admin" id="phar-method-admin" readonly></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <!-- View and Update Container -->
                            <div class="container2" id="container2-1">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>
                                <h4 class="container2-title">Ward Information</h4> <br>

                                <div class="content-container" style="width: 100%;">
                                    <!-- Drug Name -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="drug-name">Drug Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="drug-name" id="drug-name">
                                        </div>
                                    </div>

                                    <!-- Dosage -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="dosage">Dosage</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="dosage" id="dosage">
                                        </div>
                                    </div>

                                    <!-- Quantity Stock -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="quantity-stock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantity-stock" id="quantity-stock">
                                        </div>
                                    </div>
                                </div>

                                <!-- Re-order level and Cost Per Unit -->
                                <div class="content-container" style="width: 68%;">
                                    <!-- Re-order level -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="re-order-level">Re-order Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="re-order-level" id="re-order-level">
                                        </div>
                                    </div>

                                    <!-- Cost Per Unit -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="cost-per-unit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="cost-per-unit" id="cost-per-unit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <!-- For Description and Method of Administration -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="phar-supply-description" id="phar-supply-description" readonly></textarea>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="method-admin">Method of Administration</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="phar-method-admin" id="phar-method-admin"></textarea>
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="conduct-appointment-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Surgical Supplies -->
                    <div class="accordion-item">
                        <button class="accordion-header">Surgical Supplies</button>
                        <div class="accordion-content" id="accordion-content-2" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="item-number">Item Number</option>
                                        <option value="item-name">Item Name</option>
                                        <option value="stock-qtty">Stock Quantity</option>
                                        <option value="cost-per-unit">Cost Per Unit</option>
                                        <option value="reorder-level">Reorder Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="surg-table">
                                        <thead>
                                            <tr>
                                                <th>Item Number</th>
                                                <th>Item Name</th>
                                                <th>Stock Quantity</th>
                                                <th>Cost Per Unit</th>
                                                <th>Reorder Level</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                               
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 133px;">
                                <!-- For Description -->
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="surg-supply-description" id="surg-supply-description" readonly style="width: 1065px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <!-- View and Update Container -->
                            <div class="container2" id="container2-2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>
                                <h4 class="container2-title">Surgical Supply Information</h4> <br>

                                <!-- Surg Name and Quantity Stock -->
                                <div class="content-container" style="width: 100%;">
                                    <!-- Non-surg name -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="surg-name">Item Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="surg-name" id="surg-name">
                                        </div>
                                    </div>

                                    <!-- Quantity Stock -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="quantity-stock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantity-stock" id="quantity-stock">
                                        </div>
                                    </div>
                                </div>

                                <!-- Re-order level and Cost Per Unit -->
                                <div class="content-container" style="width: 100%;">
                                    <!-- Re-order level -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="re-order-level">Re-order Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="re-order-level" id="re-order-level">
                                        </div>
                                    </div>

                                    <!-- Cost Per Unit -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="cost-per-unit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="cost-per-unit" id="cost-per-unit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <!-- For Description and Method of Administration -->
                                    <div class="column" style="width: 74%;">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="surg-supply-description" id="surg-supply-description" style="width: 1000px;"></textarea>
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="conduct-appointment-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Non-Surgical Supplies -->
                    <div class="accordion-item">
                        <button class="accordion-header">Non-Surgical Supplies</button>
                        <div class="accordion-content" id="accordion-content-3" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="item-number">Item Number</option>
                                        <option value="item-name">Item Name</option>
                                        <option value="stock-qtty">Stock Quantity</option>
                                        <option value="cost-per-unit">Cost Per Unit</option>
                                        <option value="reorder-level">Reorder Level</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="non-surg-table">
                                        <thead>
                                            <tr>
                                                <th>Item Number</th>
                                                <th>Item Name</th>
                                                <th>Stock Quantity</th>
                                                <th>Cost Per Unit</th>
                                                <th>Reorder Level</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Item Number -->
                                                <td>0001</td>

                                                <!-- Item Name -->
                                                <td>Shabu</td>

                                                <!-- Stock Quantity -->
                                                <td>10</td>

                                                <!-- Cost Per Unit -->
                                                <td>₱500.00</td>

                                                <!-- Reorder Level -->
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 133px;">
                                <!-- For Description -->
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="surg-supply-description" id="surg-supply-description" readonly style="width: 1065px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <!-- View and Update Container -->
                            <div class="container2" id="container2-3">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>
                                <h4 class="container2-title">Non-surgical Supply Information</h4> <br>

                                <!-- Non-surg Name and Quantity Stock -->
                                <div class="content-container" style="width: 100%;">
                                    <!-- Non-surg name -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="non-surg-name">Item Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="non-surg-name" id="non-surg-name">
                                        </div>
                                    </div>

                                    <!-- Quantity Stock -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="quantity-stock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantity-stock" id="quantity-stock">
                                        </div>
                                    </div>
                                </div>
                                <!-- Re-order level and Cost Per Unit -->
                                <div class="content-container" style="width: 100%;">
                                    <!-- Re-order level -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="re-order-level">Re-order Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="re-order-level" id="re-order-level">
                                        </div>
                                    </div>

                                    <!-- Cost Per Unit -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="cost-per-unit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="cost-per-unit" id="cost-per-unit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <!-- For Description -->
                                    <div class="column" style="width: 74%;">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="non-surg-supply-description" id="non-surg-supply-description" style="width: 1000px;"></textarea>
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
    <script src="../js/ajax-supplies.js"></script> -->
</body>

</html>