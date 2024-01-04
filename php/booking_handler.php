<?php

$Cname = $_POST['name']; 
$Cphone = $_POST['phone']; 
$Cemail = $_POST['email']; 
$Cservice = $_POST['service']; 
$Cdate = $_POST['appointment_date']; 
$Cmessage = $_POST['message'];

$conn = mysqli_connect('localhost','root','','multipurpose');

if($conn){
    $query = "INSERT INTO booking(name , phone,email,service,date,message) values('$Cname','$Cphone','$Cemail','$Cservice','$Cdate','$Cmessage')";
    $result = mysqli_query($conn, $query);

    header("Location: /multipurpose/bookingresponse.html");
}
else{
    echo "Error :". mysqli_error($conn);
}

exit();

?>