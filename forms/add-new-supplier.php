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
            <h1>Add a Supplier</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Supplier Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Supplier Details</h4> <br>
                            <!-- Supplier Name and Supplier Email -->
                            <div class="content-container" style="width: 80%;">
                                <!-- Supplier Name -->
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-name-a">Supplier Name</label>
                                        <input type="text" name="supplier-name" id="supplier-name-a">
                                    </div>
                                </div>

                                <!-- Supplier Email -->
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-email">Supplier Email</label>
                                        <input type="email" name="supplier-email" id="supplier-email">
                                    </div>
                                </div>
                            </div>

                            <!-- Supplier Address -->
                            <div class="content-container">
                                <div class="column">
                                    <div class="row" style="width: 1100px; ">
                                        <label for="address">Address</label>
                                        <input type="text" name="supplier-address" id="address" style="width: 733px; margin-right: 238px;">
                                    </div>
                                </div>
                            </div>

                            <!-- Supplier Tel. Num and Supplier Fax Num -->
                            <div class="content-container" style="width: 80%;">
                                <!-- Supplier Tel. Num -->
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-tel-num">Tel. Number</label>
                                        <input type="tel" name="supplier-tel-num" id="supplier-tel-num">
                                    </div>
                                </div>

                                <!-- Supplier Fax Num -->
                                <div class="column">
                                    <div class="row">
                                        <label for="supplier-fax-num">Fax Number</label>
                                        <input type="number" name="supplier-fax-num" id="supplier-fax-num">
                                    </div>
                                </div>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-supplier-btn">Add Supplier</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/ajax-suppliers.js"></script> -->
</body>

</html>