<?php 
session_start(); 
include "templates/header.php"; 
?>
<link rel="stylesheet" href="css/homepage.css"> <!-- ref css code -->

<div class="banner">
    <h1>Welcome to Glory's Nail Salon</h1>
</div>

<!-- authenticator Buttons -->
<div class="auth-buttons">
    <?php if (isset($_SESSION['name'])): ?>
        <span>Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</span>
        <a href="logout.php" class="auth-button">Logout</a>
    <?php else: ?>
        <a href="login.php" class="auth-button">Login</a>
        <a href="SignUp.php" class="auth-button">Sign Up</a>
    <?php endif; ?>
</div>

<!-- grid for nail images -->
<div class="nails">
    <div class="nail">
        <a href="nail1.php"><img src="images/nail1.jpeg" alt="Nail Design 1"></a>
        <p>Mystic Gold Stilleto set</p>
    </div>
    <div class="nail">
        <a href="nail2.php"><img src="images/nail2.jpeg" alt="Nail Design 2"></a>
        <p>Gold and pink snake and pearl set</p>
    </div>
    <div class="nail">
        <a href="nail3.php"><img src="images/nail3.jpeg" alt="Nail Design 3"></a>
        <p>Retro cherry girl set</p>
    </div>
    <div class="nail">
        <a href="nail4.php"><img src="images/nail4.jpeg" alt="Nail Design 4"></a>
        <p>Bohemian square set</p>
    </div>
    <div class="nail">
        <a href="nail5.php"><img src="images/nail5.jpeg" alt="Nail Design 5"></a>
        <p>Dark mystic Gold set</p>
    </div>
    <div class="nail">
        <a href="nail6.php"><img src="images/nail6.jpeg" alt="Nail Design 6"></a>
        <p>Pearly square mermaid set</p>
    </div>
    <div class="nail">
        <a href="nail7.php"><img src="images/nail7.jpeg" alt="Nail Design 7"></a>
        <p>Classical square set</p>
    </div>
    <div class="nail">
        <a href="nail8.php"><img src="images/nail8.jpeg" alt="Nail Design 8"></a>
        <p>Red bow square set</p>
    </div>
</div>

<!-- about us Button -->
<div class="about-button-wrapper">
    <a href="aboutUs.php" class="auth-button">About Us</a>
</div>

<?php include "templates/footer.php"; ?>
