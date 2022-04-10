<?php
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];

$conn = new mysqli('localhost', 'root', '', 'eventsmange');
if ($conn->connect_error) {
     die("Connection Failed : " . $conn->connect_error);
} else {
     $stmt = $conn->prepare("insert into payment(name,email,address,gender,city,state,zipcode)values(?,?,?,?,?,?,?)");
     $stmt->bind_param("ssssssi", $name, $email, $address, $gender, $city, $state, $zipcode);
     $stmt->execute();
     echo "";
     $stmt->close();
     $conn->close();
}
