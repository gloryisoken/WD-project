<?php
session_start();
require_once('dbconnect.php');

// Connect to DB
$db = new Database();
$pdo = $db->connect(); // now $pdo is available

if ($_SERVER["REQUEST_METHOD"] === "POST") {
   
    $email = trim($_POST['email']);
    $name = trim($_POST['name']); 
    $password = trim($_POST['password']);

    // Check if user already exists by email
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $existingUser = $stmt->fetch();

    if ($existingUser) {
        echo "An account with this email already exists.";
    } else {
        // Hash the password before storing
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user into database
        $stmt = $pdo->prepare("INSERT INTO users (email, name, password) VALUES (:email, :name, :password)");
        $stmt->execute([
            'email' => $email,
            'name' => $name,
            'password' => $hashedPassword
        ]);

        echo "Account created successfully!";
       
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/login.css?v=5"> <!-- same as login -->
</head>
<body>
<div class="container">
    <form method="POST" action="">
        <h2>Sign Up</h2>
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
        <a href="login.php">Already have an account? Log in</a>
    </form>
</div>
</body>
</html>
