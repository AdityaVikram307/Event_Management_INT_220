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
?>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/checkout-success.css">
    <title>Checkout</title>
    <?php
    include('header.php');
    ?>
</head>

<body>

    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Success</h1>
        <p>We received your purchase request;<br /> we'll be in touch shortly!</p>
    </div>

</body>


</html>