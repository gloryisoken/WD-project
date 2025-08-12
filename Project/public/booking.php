<?php
session_start(); // Start session 

require 'dbconnect.php'; // DB connection

// redirects to login if user is not logged in
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
    exit();
}

require 'templates/header.php';
?>
<link rel="stylesheet" href="css/booking.css">
</head>
<body>

    
<!-- booking page content -->
<div class="appointment-container">
    <h2>Book an Appointment</h2>

    <!-- appointment booking form -->
    <form action="submit_appointment.php" method="POST" class="appointment-form">

        <!-- select from all nail artist -->
        <label for="artist">Select Your Nail Artist:</label>
        <select id="artist" name="artist" required>
            <option value="">Choose an artist</option>
            <option value="Amira">Amira</option>
            <option value="Sopia">Sopia</option>
            <option value="Jade">Jade</option>
            <option value="Maya">Maya</option>
            <option value="Luna">Luna</option>
            <option value="Rose">Rose</option>
            <option value="Bella">Bella</option>
            <option value="Zoey">Zoey</option>
        </select>

        <!-- choose date -->
        <label for="appointment_date">Preferred Date:</label>
        <input type="date" id="appointment_date" name="appointment_date" required>

        <!-- choose time -->
        <label for="appointment_time">Preferred Time:</label>
        <input type="time" id="appointment_time" name="appointment_time" required>

        <!-- submit form -->
        <button type="submit" class="submit-button">Submit Appointment</button>
    </form>
</div>

<?php require 'templates/footer.php'; ?>

