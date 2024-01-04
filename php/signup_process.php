<?php
$name = $_POST['logname'];
$email = $_POST['logemail'];
$pass = $_POST['logpass'];

$conn = mysqli_connect('localhost', 'root', '', 'multipurpose');

if (!$conn) {
    die("Error: " . mysqli_error($conn));
} else {
    $hashed_password = password_hash($pass, PASSWORD_DEFAULT);

    $query = "INSERT INTO signup (username, email, password) VALUES ('$name', '$email', '$hashed_password')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: signupsuccess.html');
        exit(); 
    } else {
        echo 'Oops! Something went wrong. Please try again later.';
    }
}

mysqli_close($conn);
?>
