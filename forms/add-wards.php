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
            <h1>Add a Ward</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">Ward Information</button>
                        <div class="accordion-content"> <br>
                            <h4>Ward Details</h4> <br>
                            <!-- Ward Name and Location -->
                            <div class="content-container" style="width: 80%;">
                                <!-- Ward Name -->
                                <div class="column">
                                    <div class="row">
                                        <label for="ward_name">Ward Name</label>
                                        <input type="text" name="ward-name" id="ward-name">
                                    </div>
                                </div>

                                <!-- Location -->
                                <div class="column">
                                    <div class="row">
                                        <label for="ward-location">Ward Location</label>
                                        <input type="text" name="ward-location" id="ward-location">
                                    </div>
                                </div>
                            </div>

                            <!-- TotalNumofBeds and TelExtensionNum -->
                            <div class="content-container" style="width: 80%;">
                                <!-- TotalNumofBeds -->
                                <div class="column">
                                    <div class="row">
                                        <label for="total-num-of-beds">Number of Beds</label>
                                        <input type="number" name="total-num-of-beds" id="total-num-of-beds">
                                    </div>
                                </div>

                                <!-- TelExtensionNum -->
                                <div class="column">
                                    <div class="row">
                                        <label for="tel-extension-num">Tel. Number</label>
                                        <input type="tel" name="tel-extension-num" id="tel-extension-num">
                                    </div>
                                </div>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-supplier-btn">Add Ward</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/ajax-wards.js"></script> -->
</body>

</html>