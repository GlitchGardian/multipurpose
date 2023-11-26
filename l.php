<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["logemail"];
    $password = $_POST["logpass"];
    
    // Perform necessary operations (e.g., validate, check against database, etc.)
    
    // For example, if you want to check against a hardcoded username and password:
    $valid_email = "example@example.com";
    $valid_password = "password123";
    
    if ($email == $valid_email && $password == $valid_password) {
        // Successful login, redirect to a new page
        header("Location: welcome_page.php");
        exit();
    } else {
        // Invalid login, redirect back to the login page with an error message
        header("Location: Login.html?error=invalid_login");
        exit();
    }
}
?>
