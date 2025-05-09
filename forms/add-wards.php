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
            <h1>Add a Ward</h1>
            <section class="add-new-patient-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Ward Information</summary>
                        <div class="accordion-content"> <br>
                            <h4>Ward Details</h4> <br>
                            <div class="content-container" style="width: 80%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="ward-name">Ward Name</label>
                                        <input type="text" name="wardName" id="ward-name">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="ward-location">Ward Location</label>
                                        <input type="text" name="location" id="ward-location">
                                    </div>
                                </div>
                            </div>

                            <div class="content-container" style="width: 80%;">
                                <div class="column">
                                    <div class="row">
                                        <label for="total-num-of-beds">Number of Beds</label>
                                        <input type="number" name="totalBeds" id="total-num-of-beds">
                                    </div>
                                </div>

                                <div class="column">
                                    <div class="row">
                                        <label for="tel-extension-num">Tel. Number</label>
                                        <input type="tel" name="telephoneExtension" id="tel-extension-num">
                                    </div>
                                </div>
                            </div> <br>
                        </div>
                    </details>
                </div>
            </section>

            <div class="submit-bttns">
                <button type="button" id="add-ward-btn">Add Ward</button>
                <button type="button" id="clear-btn">Clear</button>
            </div>
        </div>
    </div>>
</body>

</html>