<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$address = $_POST['address'];
$service = $_POST['service'];
$description = $_POST['description'];

$file_name = $_FILES['profile_photo']['name'];
$tmp_name = $_FILES['profile_photo']['tmp_name'];
$target_folder = 'profilephotos/' . $file_name;


if (move_uploaded_file($tmp_name, $target_folder)) {
    echo 'File Uploaded Successfully';
} else {
    echo 'Error Uploading File';
}


$conn = mysqli_connect("localhost", "root", "", "multipurpose");

if ($conn) {

    $sql = "INSERT INTO professionals (profile_photo,name, email, phone, city, address, service, description) VALUES ('$target_folder','$name', '$email', '$phone','$city', '$address', '$service', '$description')";

    $run = mysqli_query($conn, $sql);

    header('Location: becomeresponse.html');

} else {
    echo "error" . mysqli_error($conn);
}
exit();
?>