<?php

$target_folder = 'profilephotos/';

$file_name = $_FILES['profile_photo']['name'];
$tmp_name = $_FILES['profile_photo']['tmp_name'];

echo $file_name;

// Ensure the target directory exists
if (!file_exists($target_folder)) {
    mkdir($target_folder, 0777, true);
}

$destination_path = $target_folder . $file_name;

if (move_uploaded_file($tmp_name, $destination_path)) {
    echo 'File Uploaded Successfully';
} else {
    echo 'Error Uploading File';
}

?>