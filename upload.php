
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload</title>
</head>
<body>
    <form action="#" enctype="multipart/form-data" method="post">
        <input type="file" name="profile_photo">
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

$target_folder = 'profilephotos/';

$file_name = $_FILES['profile_photo']['name'];
$tmp_name = $_FILES['profile_photo']['tmp_name'];

if(move_uploaded_file($tmp_name,$target_folder)){
    echo'File Uploded Succesfully';
}


?>
