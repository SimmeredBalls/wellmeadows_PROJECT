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
            <h1>Requisition</h1>
            <section class="create-requisition-section">
                <div class="accordion">
                    <details class="accordion-item open>
                        <summary class="accordion-header">Create Requisition</summary>
                        <div class="accordion-content"> <br>
                            <h4>Requisition Details</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 64%">
                                    <div class="row">
                                        <label for="drug-options">Drugs/Items</label>
                                        <select name="requestedItem" id="drug-options">
                                            <option value="" disabled selected>Choose a drug/item</option>
                                            <option value="actual-drug-1">Actual Drug 1</option>
                                            <option value="actual-supply-2">Actual Supply 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="staff">Staff</label>
                                        <select name="staffID" id="staff" style="margin-right: 145px;">
                                            <option value="" disabled selected>Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="column">
                                    <div class="row">
                                        <label for="ward">Ward</label>
                                        <select name="wardID" id="ward">
                                            <option value="" disabled selected>Choose a ward</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="column">
                                    <div class="row">
                                        <label for="drug-quantity">Quantity</label>
                                        <input type="number" name="quantity" id="drug-quantity">
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
                                <button type="button" id="submit-requisition-btn">Create Requisition</button>
                            </div> <br>
                        </div>
                    </details>

                    <details class="accordion-item">
                        <summary class="accordion-header">Accept Requisition</summary>
                        <div class="accordion-content"> <br>
                            <h4>Delivered Requisitions</h4> <br>
                            <div class="content-container">
                                <div class="column" style="width: 60%">
                                    <div class="row">
                                        <div class="delivered-requisition-list">
                                            <button>Requisition Nbr/Staff/Ward: 570/0001/16 | 2002-12-10</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="width: 60%">
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
                    </details>
                </div>
            </section>
        </div>
    </div>
    </body>

</html>