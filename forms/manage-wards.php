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
            <h1>Manage Wards</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Wards List -->
                    <div class="accordion-item">
                        <button class="accordion-header">Wards List</button>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <!-- Searchbox and sort btn -->
                            <div class="search">
                                <div class="search-container">
                                    <input type="text" placeholder="Search..." class="search-input" />
                                    <button class="search-btn">Search</button>
                                </div>
                                <div class="sort-container">
                                    <select name="sort" id="sort-select" class="sort-select">
                                        <option value="" disabled selected>Sort</option>
                                        <option value="ward-number">ID</option>
                                        <option value="ward-name">Name</option>
                                        <option value="ward-address">Location</option>
                                        <option value="ward-email">Number of Beds</option>
                                        <option value="ward-tel-num">Tel. Number</option>
                                    </select>
                                </div>
                            </div>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="ward-table">
                                        <thead>
                                            <tr>
                                                <th>Ward #</th>
                                                <th>Ward Name</th>
                                                <th>Location</th>
                                                <th>Number of Beds</th>
                                                <th>Tel. Number</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <!-- Ward Number -->
                                                <td>0001</td>

                                                <!-- Ward Name -->
                                                <td>Shenzheng Sorting Center</td>

                                                <!-- Location -->
                                                <td>Basta nasa Hospital lang dapit</td>

                                                <!-- Number of Beds -->
                                                <td>15</td>

                                                <!-- Tel. Number -->
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                            <tr>
                                                <!-- Ward Number -->
                                                <td>0001</td>

                                                <!-- Ward Name -->
                                                <td>Shenzheng Sorting Center</td>

                                                <!-- Location -->
                                                <td>Basta nasa Hospital lang dapit</td>

                                                <!-- Number of Beds -->
                                                <td>15</td>

                                                <!-- Tel. Number -->
                                                <td>+63 35 826 8263</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- View and Update Container -->
                            <div class="container2">
                                <!-- Close Button -->
                                <button class="close-btn" id="close-btn">x</button>
                                <h4 class="container2-title">Ward Information</h4> <br>

                                <!-- Ward Number -->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="ward-num">Ward Number</label>
                                            <input type="number" name="ward-number" id="ward-number" value="0001" readonly>
                                        </div>
                                    </div>
                                </div>

                                <!-- Ward Name and Location-->
                                <div class="content-container">
                                    <div class="column">
                                        <div class="row">
                                            <label for="ward-name">Ward Name</label>
                                            <input type="text" name="ward-name" id="ward-name" value="Shenzheng Sorting Center" readonly>
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="row">
                                            <label for="address">Location</label>
                                            <input type="text" name="ward-location" id="ward-location">
                                        </div>
                                    </div>
                                </div>

                                <!-- Number of Beds and Tel. Number -->
                                <div class="content-container">
                                    <!-- Number of Beds -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="number-of-beds">Number of Beds</label>
                                            <input type="number" name="number-of-beds" id="number-of-beds" value="00022412">
                                        </div>
                                    </div>

                                    <!-- Ward Tel. Number -->
                                    <div class="column">
                                        <div class="row">
                                            <label for="ward-tel-number">Tel. Number</label>
                                            <input type="tel" name="ward-tel-number" id="ward-tel-number" value="+63 935 826 8263">
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
    <!-- <script src="../js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../js/ajax-wards.js"></script> -->
</body>

</html>