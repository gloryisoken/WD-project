<?php
session_start();
require_once('dbconnect.php');

// makes sure the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

// Get POST values
$artist = trim($_POST['artist']);
$appointment_date = $_POST['appointment_date'];
$appointment_time = $_POST['appointment_time'];

// Validates information put in
if (empty($artist) || empty($appointment_date) || empty($appointment_time)) {
    echo "Please fill in all required fields.";
    exit();
}

// Connect to DB
$db = new Database();
$pdo = $db->connect();

// Get user ID from email
$stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
$stmt->execute(['email' => $_SESSION['email']]);
$user = $stmt->fetch();

if (!$user) {
    echo "User not found in database.";
    exit();
}

$user_id = $user['id'];

// Insert appointment bo=ox
$insertStmt = $pdo->prepare("
    INSERT INTO appointments (user_id, artist, appointment_date, appointment_time)
    VALUES (:user_id, :artist, :appointment_date, :appointment_time)
");

$insertStmt->execute([
    'user_id' => $user_id,
    'artist' => $artist,
    'appointment_date' => $appointment_date,
    'appointment_time' => $appointment_time
]);

//confirmation page
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Appointment Confirmed</title>
    <link rel="stylesheet" type="text/css" href="css/booking.css">
</head>
<body>
    <div class="appointment-container">
        <h2>🎉 Appointment Confirmed!</h2>
        <p>Your appointment with <strong><?php echo htmlspecialchars($artist); ?></strong> 
        on <strong><?php echo htmlspecialchars($appointment_date); ?></strong> 
        at <strong><?php echo htmlspecialchars($appointment_time); ?></strong> has been booked.</p>

        <a href="homepage.php" class="submit-button">Return to Homepage</a>
    </div>
</body>
</html>
