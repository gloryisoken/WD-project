<?php
session_start();
require_once('dbconnect.php');

 // Create the DB connection
$db = new Database();
$pdo = $db->connect(); 

//check if form is submitted using POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

 //get user input from login   
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();

    //
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];

        header("Location: homepage.php");
        exit();
    } else {
        echo "Invalid login credentials.";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css?v=5">
</head>
<body>
<div class="container">
    <form action="" method="post">
        <h2>Login</h2>
        <label>Email:</label>
        <input name="email" type="email" required><br><br>

        <label>Password:</label>
        <input name="password" type="password" required><br><br>

        <button type="submit" name="Submit">Login</button>
        <a href="signup.php">Don't have an account?</a>
    </form>
</div>
</body>
</html>

