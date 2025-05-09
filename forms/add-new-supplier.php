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
            <h1>Add a Supplier</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Supplier Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Supplier Details</h4> <br>
                            <div class="content-container" style="width: 80%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-name-a">Supplier Name</label>
                                        <input type="text" name="supplierName" id="supplier-name-a">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-email">Supplier Email</label>
                                        <input type="email" name="supplierEmail" id="supplier-email">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="address" id="address" style="width: 733px; margin-right: 238px;">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container" style="width: 80%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-tel-num">Tel. Number</label>
                                        <input type="tel" name="telephone" id="supplier-tel-num">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-fax-num">Fax Number</label>
                                        <input type="number" name="fax" id="supplier-fax-num">
                                    </div>
                                </div>
                            </div> <br>
                        </div>
                    </details>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-supplier-btn">Add Supplier</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>
</body>
</html>