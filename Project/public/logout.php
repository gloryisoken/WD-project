<?php
session_start();
session_unset(); // Clears all the session variables
session_destroy(); //  Destroy the session

header("Location: homepage.php"); // Redirect to login page
exit();

