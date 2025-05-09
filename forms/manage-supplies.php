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
            <h1>Hospital Supplies</h1>
            <section class="wards-section">
                <div class="accordion">
                    <details class="accordion-item open">
                        <summary class="accordion-header">Pharmaceutical Supplies</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select-pharma" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="drugID">Drug Number</option>
                                        <option value="drugName">Drug Name</option>
                                        <option value="dosage">Dosage</option>
                                        <option value="quantityStock">Stock Quantity</option>
                                        <option value="costPerUnit">Cost Per Unit</option>
                                        <option value="reorderLevel">Reorder Level</option>
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
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 135px;">
                                <div class="column">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="pharma-description" readonly></textarea>
                                    </div>
                                </div>
                                <div class="column" style="margin-left: 80px;">
                                    <div class="row">
                                        <label for="administrationMethod">Administration Method</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="administrationMethod" id="pharma-administrationMethod" readonly></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="container2" id="container2-pharma">
                                <button class="close-btn" id="close-btn-pharma">x</button>
                                <h4 class="container2-title">Pharmaceutical Supply Information</h4> <br>

                                <div class="content-container" style="width: 100%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="drugID">Drug Number</label>
                                            <input type="number" name="drugID" id="drugID" readonly>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="drugName">Drug Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="drugName" id="drugName">
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
                                            <label for="quantityStock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantityStock" id="quantityStock">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container" style="width: 68%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="reorderLevel">Reorder Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="reorderLevel" id="reorderLevel">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="costPerUnit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" step="0.01" name="costPerUnit" id="costPerUnit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column" style="width: 74%;">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="description" id="pharma-description-edit" style="width: 1000px;"></textarea>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="administrationMethod">Administration Method</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="administrationMethod" id="pharma-administrationMethod-edit"></textarea>
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="edit-pharma-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Surgical Supplies</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select-surg" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="itemID">Item Number</option>
                                        <option value="supplyName">Item Name</option>
                                        <option value="quantityStock">Stock Quantity</option>
                                        <option value="costPerUnit">Cost Per Unit</option>
                                        <option value="reorderLevel">Reorder Level</option>
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
                                            <tr></tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 133px;">
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="surg-description" readonly style="width: 1065px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="container2" id="container2-surg">
                                <button class="close-btn" id="close-btn-surg">x</button>
                                <h4 class="container2-title">Surgical Supply Information</h4> <br>

                                <div class="content-container" style="width: 100%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="itemID">Item Number</label>
                                            <input type="number" name="itemID" id="surgItemID" readonly>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="supplyName">Item Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="supplyName" id="surgSupplyName">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="quantityStock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantityStock" id="surgQuantityStock">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container" style="width: 100%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="reorderLevel">Reorder Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="reorderLevel" id="surgReorderLevel">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="costPerUnit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" step="0.01" name="costPerUnit" id="surgCostPerUnit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column" style="width: 74%;">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="description" id="surg-description-edit" style="width: 1000px;"></textarea>
                                        </div>
                                    </div>
                                </div> <br>
                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="edit-surg-btn">Edit</button>
                                </div>
                            </div>
                        </div>
                    </details>


                    <details class="accordion-item">
                        <summary class="accordion-header">Non-Surgical Supplies</summary>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select-nonsurg" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="itemID">Item Number</option>
                                        <option value="supplyName">Item Name</option>
                                        <option value="quantityStock">Stock Quantity</option>
                                        <option value="costPerUnit">Cost Per Unit</option>
                                        <option value="reorderLevel">Reorder Level</option>
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
                                                <td>0001</td>
                                                <td>Shabu</td>
                                                <td>10</td>
                                                <td>₱500.00</td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="content-container" style="padding-left: 133px;">
                                <div class="column" style="width: 100%;">
                                    <div class="row">
                                        <label for="description">Description</label>
                                    </div>
                                    <div class="row">
                                        <textarea name="description" id="nonsurg-description" readonly style="width: 1065px;"></textarea>
                                    </div>
                                </div>
                            </div> <br>

                            <div class="container2" id="container2-nonsurg">
                                <button class="close-btn" id="close-btn-nonsurg">x</button>
                                <h4 class="container2-title">Non-surgical Supply Information</h4> <br>

                                <div class="content-container" style="width: 100%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="itemID">Item Number</label>
                                            <input type="number" name="itemID" id="nonsurgItemID" readonly>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="supplyName">Item Name</label>
                                        </div>
                                        <div class="row">
                                            <input type="text" name="supplyName" id="nonsurgSupplyName">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="quantityStock">Quantity Stock</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="quantityStock" id="nonsurgQuantityStock">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container" style="width: 100%;">
                                    <div class="column">
                                        <div class="row">
                                            <label for="reorderLevel">Reorder Level</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" name="reorderLevel" id="nonsurgReorderLevel">
                                        </div>
                                    </div>

                                    <div class="column">
                                        <div class="row">
                                            <label for="costPerUnit">Cost Per Unit</label>
                                        </div>
                                        <div class="row">
                                            <input type="number" step="0.01" name="costPerUnit" id="nonsurgCostPerUnit">
                                        </div>
                                    </div>
                                </div>

                                <div class="content-container">
                                    <div class="column" style="width: 74%;">
                                        <div class="row">
                                            <label for="description">Description</label>
                                        </div>
                                        <div class="row">
                                            <textarea name="description" id="nonsurg-description-edit" style="width: 1000px;"></textarea>
                                        </div>
                                    </div>
                                </div> <br>

                                <div class="conduct-appointment-btn-container">
                                    <button type="button" id="edit-nonsurg-btn">Edit</button>
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