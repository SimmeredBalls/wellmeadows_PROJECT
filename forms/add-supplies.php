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
            <h1>Add a Supply</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Add Pharmaceutical Supply</button>
                        <div class="accordion-content"> <br>
                            <h4>Pharmaceutical Supply Information</h4> <br>
                            <!-- Drug Name, Dosage, and Quantity Stock -->
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
                                        <input type="number" name="quantity-stock" id="phar-quantity-stock">
                                    </div>
                                </div>
                            </div>

                            <!-- Re-order level and Cost Per Unit -->
                            <div class="content-container" style="width: 70%;">
                                <!-- Re-order level -->
                                <div class="column">
                                    <div class="row">
                                        <label for="re-order-level">Re-order Level</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="re-order-level" id="phar-re-order-level">
                                    </div>
                                </div>

                                <!-- Cost Per Unit -->
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="cost-per-unit" id="phar-cost-per-unit">
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
                                        <textarea name="phar-supply-description" id="phar-supply-description"></textarea>
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

                            <div class="submit-bttns">
                                <button type="button" id="add-supplier-btn">Add Supply</button>
                                <button type="button" id="clear-btn">Clear</button>
                            </div> <br> <br>

                            
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Add Non-Surgical Supply</button>
                        <div class="accordion-content"> <br>
                            <h4>Non-Surgical Supply Information</h4> <br>
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
                                        <input type="number" name="quantity-stock" id="non-surg-quantity-stock">
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
                                        <input type="number" name="re-order-level" id="non-surg-re-order-level">
                                    </div>
                                </div>

                                <!-- Cost Per Unit -->
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="cost-per-unit" id="non-surg-cost-per-unit">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <!-- For Description and Method of Administration -->
                                <div class="column" style="width: 70%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="non-surg-supply-description" id="non-surg-supply-description" style="width: 1000px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="submit-bttns">
                                <button type="button" id="add-supplier-btn">Add Supply</button>
                                <button type="button" id="clear-btn">Clear</button>
                            </div> <br> <br>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">Add Surgical Supply</button>
                        <div class="accordion-content"> <br>
                            <h4>Surgical Supply Information</h4> <br>
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
                                        <input type="number" name="quantity-stock" id="surg-quantity-stock">
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
                                        <input type="number" name="re-order-level" id="surg-re-order-level">
                                    </div>
                                </div>

                                <!-- Cost Per Unit -->
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="cost-per-unit" id="surg-cost-per-unit">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <!-- For Description and Method of Administration -->
                                <div class="column" style="width: 70%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="surg-supply-description" id="surg-supply-description" style="width: 1000px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="submit-bttns">
                                <button type="button" id="add-supplier-btn">Add Supply</button>
                                <button type="button" id="clear-btn">Clear</button>
                            </div> <br> <br>
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