<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $service = $_POST['service'];
    $description = $_POST['description'];
        
     $conn = mysqli_connect("localhost","root","","multipurpose");

    if ($conn){
    
         $sql = "INSERT INTO professionals (name, email, phone, address, service, description) VALUES ('$name', '$email', '$phone', '$address', '$service', '$description')";
    
         $run = mysqli_query($conn,$sql);

         header('Location: response.html');

        }

        else{       
            echo "error". mysqli_error($conn);
        }

?>
