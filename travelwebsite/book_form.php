<?php
$connection = mysqli_connect('localhost','id21758907_root','vaishnavigupta0209@gmail.com','id21758907_db_book');

if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving= $_POST['leaving'];

    $request = "insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values
    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

    if (mysqli_query($connection, $request)){
        echo "Thanks for Booking!";
    }
    else{
        echo "Something went wrong try again!";
    }
}
    
?>
 

