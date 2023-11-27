<?php 
if (isset($_POST['login'])) {
    $loginmail = $_POST['logemail'];
    $pass = $_POST['logpass'];
}

$conn = mysqli_connect('localhost', 'root', '', 'multipurpose');

if (mysqli_connect_errno()) {
    echo 'Error: ' . mysqli_connect_error();
    exit();
} else {
    $query = "SELECT * FROM signup WHERE email = '$loginmail'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);

        // Verify the password
        if (password_verify(trim($pass), $row['password'])) {
            header('Location: index.html');
            exit();
        } else {
            echo 'Incorrect password. Please try again.';
            echo 'Entered Password: ' . $pass . '<br>';
            echo 'Stored Password: ' . $row['password'] . '<br>';

        }
    } else {
        echo 'User not found. Please check your email address.';
    }
}

mysqli_close($conn);
?>
