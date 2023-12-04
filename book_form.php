<?php
$connection =mysqli_connect('localhost','root', '','book_db');

if(isset($_POST['send'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $location=$_post['location'];
    $guests=$_POST['guests'];
    $arrivals=$_POST['arrivals'];
    $leavings=$_POST['leavings'];

    $request="insert into book_form(name, email, phone, address, location, guests, arrivals, leavings) values('$name','$email','$phone','$address','$location', '$guests', '$arrivals', '$leavings')";

mysqli_query($connection,$request);
header('location:Book.php');

}
else{
    echo 'something went wrong try again';
}
?>