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
            <h1>Wards</h1>
            <section class="wards-section">
                <div class="accordion">
                    <!-- Waiting List -->
                    <div class="accordion-item">
                        <button class="accordion-header">Waiting List</button>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <h4>Current Waiting List</h4> <br>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="waiting-list-table">
                                        <tr>
                                            <th>Patient Num</th>
                                            <th>Patient</th>
                                            <th>On Waiting List</th>
                                            <th>Ward</th>
                                            <th>Expected Stay (days)</th>
                                            <th>Planned Exit Date</th>
                                            <th>Exit Date</th>
                                            <th>Bed</th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        <tbody>
                                            <!-- Add rows here as needed -->

                                            <tr>
                                                <!-- Patient Number -->
                                                <td>0001</td>

                                                <!-- Patient Name -->
                                                <td>Aldrin Said</td>

                                                <!-- On Waiting List -->
                                                <td>12/10/2002</td>

                                                <!-- Ward -->
                                                <td><select name="ward" id="ward">
                                                        <option value="">Ward List</option>
                                                    </select>
                                                </td>

                                                <!-- Expected  Stay (Days) -->
                                                <td>143</td>

                                                <!-- Planned Exit Date -->
                                                <td>12/10/2002</td>

                                                <!-- Exit Date -->
                                                <td><input type="date" name="exit-date" id="exit-date"></td>

                                                <!-- Bed -->
                                                <td><select name="bed" id="bed">
                                                        <option value="">Choose Bed</option>
                                                        <option value="Bed ni Aldrin">Bed ni Aldrin</option>
                                                    </select>
                                                </td>

                                                <!-- Update -->
                                                <td><a href="#">Update</a></td>

                                                <!-- Delete -->
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Current In-Patients -->
                    <div class="accordion-item">
                        <button class="accordion-header">Current In-Patients</button>
                        <div class="accordion-content" style="padding: 0px 10px;"> <br>
                            <h4>In Patients</h4> <br>
                            <div class="content-container">
                                <div class="table-container">
                                    <table class="waiting-list-table">
                                        <tr>
                                            <th>Patient Num</th>
                                            <th>Patient</th>
                                            <th>Date Admitted</th>
                                            <th>Ward</th>
                                            <th>Expected Stay (days)</th>
                                            <th>Planned Exit Date</th>
                                            <th>Exit Date</th>
                                            <th>Bed</th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        <tbody>
                                            <!-- Add rows here as needed -->

                                            <tr>
                                                <!-- Patient Number -->
                                                <td>0001</td>

                                                <!-- Patient Name -->
                                                <td>Aldrin Said</td>

                                                <!-- Date Admitted -->
                                                <td>12/10/2002</td>

                                                <!-- Ward -->
                                                <td><select name="ward" id="ward">
                                                        <option value="">Ward List</option>
                                                    </select>
                                                </td>

                                                <!-- Expected  Stay (Days) -->
                                                <td>143</td>

                                                <!-- Planned Exit Date -->
                                                <td>12/10/2002</td>

                                                <!-- Exit Date -->
                                                <td><input type="date" name="exit-date" id="exit-date"></td>

                                                <!-- Bed -->
                                                <td><select name="bed" id="bed">
                                                        <option value="">Choose Bed</option>
                                                        <option value="Bed ni Aldrin">Bed ni Aldrin</option>
                                                    </select>
                                                </td>

                                                <!-- Update -->
                                                <td><a href="#">Update</a></td>

                                                <!-- Delete -->
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- JS Script -->
    <!-- <script src="../js/script.js"></script> -->
</body>

</html>