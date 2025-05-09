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
            <h1>Requisition</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <!-- Create Requisition -->
                    <div class="accordion-item">
                        <button class="accordion-header">Create Requisition</button>
                        <div class="accordion-content"> <br>
                            <h4>Requisition Details</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 64%">
                                    <!-- Drug -->
                                    <div class="row">
                                        <label for="drug">Drugs/Items</label>
                                        <select name="drug-options" id="drug-options">
                                            <option value="" disabled selected>Choose a drug/item</option>
                                            <option value="">Shabu :)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staff">Staff</label>
                                        <select name="staff" id="staff" style="margin-right: 145px;">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <!-- Ward -->
                                    <div class="row">
                                        <label for="ward">Ward</label>
                                        <select name="ward" id="ward">
                                            <option value="" disabled selected>Choose a ward</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <!-- Quantity -->
                                    <div class="row">
                                        <label for="drug-quantity">Quantity</label>
                                        <input type="number" name="drug-quantity" id="drug-quantity">
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="requisition-list">
                                        <ol>
                                            <li>Shabu - 10 klg</li>
                                        </ol>
                                    </div>

                                    <a href="#" style="margin-left: 0px; color: red; font-size: 13.5px;">Remove</a>
                                </div>
                            </div>
                            <div class="content-container" style="width: 50%; justify-content: center; margin-top: -130px; margin-left: 40px; margin-bottom: 130px;">
                                <div class="column">
                                    <div class="add-item-requisition-btn-container">
                                        <button type="button" id="add-item-requisition-btn" style="width: 210px;">Add Item to Requisition</button>
                                    </div>
                                </div>
                            </div>
                            <div class="create-requisition-btn-container">
                                <button type="button" id="create-requisition-btn">Create Requisition</button>
                            </div> <br>
                        </div>
                    </div>

                    <!-- Accept Requisition -->
                    <div class="accordion-item">
                        <button class="accordion-header">Accept Requisition</button>
                        <div class="accordion-content"> <br>
                            <h4>Delivered Requisitions</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <!-- Delivered Requisition List -->
                                    <div class="row">
                                        <div class="delivered-requisition-list">
                                            <button>Requisition Nbr/Staff/Ward: 570/0001/16 | 2002-12-10</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="width: 60%">
                                    <!-- Delivered Requisition List -->
                                    <div class="row">
                                        <div class="delivered-requisition-description">
                                            <ol>
                                                <li><h4>Shabu - 10 klg</h4></li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accept-requisition-btn-container">
                                <button type="button" id="accept-requisition-btn" style="width: 210px;">Accept Requisition</button>
                            </div> <br>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
    <script src="../js/ajax-requisitions.js"></script> -->
</body>

</html>