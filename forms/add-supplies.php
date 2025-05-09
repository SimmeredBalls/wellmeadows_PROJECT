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
            <h1>Add a Supply</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <details class="accordion-item">
                        <summary class="accordion-header">Add Pharmaceutical Supply</summary>
                        <div class="accordion-content"> <br>
                            <h4>Pharmaceutical Supply Information</h4> <br>
                            <div class="content-container" style="width: 100%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="drug-name">Drug Name</label>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="drugName" id="drug-name">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="dosage">Dosage</label>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="dosage" id="dosage">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="quantity-stock">Quantity Stock</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="quantityInStock" id="phar-quantity-stock">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container" style="width: 70%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="re-order-level">Re-order Level</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="reorderLevel" id="phar-re-order-level">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="costPerUnit" id="phar-cost-per-unit">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="phar-supply-description"></textarea>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="method-admin">Method of Administration</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="methodOfAdministration" id="phar-method-admin"></textarea>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="submit-bttns">
                                <button type="button" id="add-pharmaceutical-btn">Add Supply</button>
                                <button type="button" id="clear-pharmaceutical-btn">Clear</button>
                            </div> <br> <br>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Add Non-Surgical Supply</summary>
                        <div class="accordion-content"> <br>
                            <h4>Non-Surgical Supply Information</h4> <br>
                            <div class="content-container" style="width: 100%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="non-surg-name">Item Name</label>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="itemName" id="non-surg-name">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="quantity-stock">Quantity Stock</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="quantityInStock" id="non-surg-quantity-stock">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container" style="width: 100%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="re-order-level">Re-order Level</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="reorderLevel" id="non-surg-re-order-level">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="costPerUnit" id="non-surg-cost-per-unit">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 70%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="non-surg-supply-description" style="width: 1000px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="submit-bttns">
                                <button type="button" id="add-nonsurgical-btn">Add Supply</button>
                                <button type="button" id="clear-nonsurgical-btn">Clear</button>
                            </div> <br> <br>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Add Surgical Supply</summary>
                        <div class="accordion-content"> <br>
                            <h4>Surgical Supply Information</h4> <br>
                            <div class="content-container" style="width: 100%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="surg-name">Item Name</label>
                                    </div>
                                    <div class="row">
                                        <input type="text" name="itemName" id="surg-name">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="quantity-stock">Quantity Stock</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="quantityInStock" id="surg-quantity-stock">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container" style="width: 100%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="re-order-level">Re-order Level</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="reorderLevel" id="surg-re-order-level">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="cost-per-unit">Cost Per Unit</label>
                                    </div>
                                    <div class="row">
                                        <input type="number" name="costPerUnit" id="surg-cost-per-unit">
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column" style="width: 70%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="surg-supply-description" style="width: 1000px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>
                            <div class="submit-bttns">
                                <button type="button" id="add-surgical-btn">Add Supply</button>
                                <button type="button" id="clear-surgical-btn">Clear</button>
                            </div> <br> <br>
                        </div>
                    </details>
                </div>
            </section>
        </div>
    </div>
</body>
</html>