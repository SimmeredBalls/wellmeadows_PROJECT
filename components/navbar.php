
<!-- Navbar -->
<nav class="navbar">
    <div class="logo">
        <a href="../forms/homepage.php" style="display: flex; align-items: center; gap: 8px;">
            <img src="../images/logo.png" alt="logo-img" class="index-logo-img">
            <h6>Wellmeadows Hospital</h6>
        </a>
    </div>
    <div class="navbar-options">
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownPatients')">Patients</p>
            <div id="dropdownPatients" class="dropdown-content">
                <a href="../forms/add-new-patient.php">Add New Patient</a>
                <a href="../forms/manage-patient-information.php">Manage Patient Information</a>
                <a href="../forms/initial-appointment.php">Initial Appointments</a>
                <a href="../forms/view-outpatients.php">View Outpatients</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownStaff')">Staff</p>
            <div id="dropdownStaff" class="dropdown-content">
                <a href="../forms/add-new-staff.php">Add New Staff</a>
                <a href="../forms/manage-staff-information.php">Manage Staff Information</a>
                <a href="../forms/staff-work-experiences.php">Staff Work Experiences</a>
                <a href="../forms/staff-qualifications.php">Staff Qualifications</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownWards')">Wards</p>
            <div id="dropdownWards" class="dropdown-content">
                <a href="../forms/add-wards.php">Add Wards</a>
                <a href="../forms/manage-wards.php">Manage Wards</a>
                <a href="../forms/waiting-list.php">Waiting List</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownStock')">Supplies</p>
            <div id="dropdownStock" class="dropdown-content">
                <a href="../forms/add-supplies.php">Add Supplies</a>
                <a href="../forms/manage-supplies.php">Manage Supplies</a>
                <a href="../forms/create-requisition.php">Create a Requisition</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownMedication')">Medication</p>
            <div id="dropdownMedication" class="dropdown-content" style="left: 25%;">
                <a href="../forms/medication-information.php">Medication Information</a>
            </div>
        </div>
        <div class="dropdown">
            <p class="dropdown-toggle" onclick="toggleDropdown('dropdownOther')" style="margin-right: 0;">Other</p>
            <div id="dropdownOther" class="dropdown-content">
                <a href="../forms/add-new-supplier.php">Add New Supplier</a>
                <a href="../forms/manage-suppliers.php">Manage Suppliers</a>
                <a href="../forms/local-doctor-information.php">Local Doctor Information</a>
            </div>
        </div>
    </div>
    <div class="nav-right">
        <!-- User icon and dropdown -->
        <div class="dropdown">
            <div class="user-icon">
                <img src="../images/icons/profile-icon.png" onclick="toggleDropdown('dropdownUserIcon')"
                    alt="User Icon" class="user-img dropdown-toggle">
            </div>
            <div id="dropdownUserIcon" class="dropdown-content" style="left: -60;">
                <a href="logout.php">Log Out</a>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
