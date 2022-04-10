<?php
$nameError = $emailError = $phoneError = "";
$name = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameError = "This field is mandatory";
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $nameError = "Only letters allowed";
    }
  }

  if (empty($_POST["email"])) {
    $emailError = "This field is mandatory";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailError = "Invalid email format";
    }
  }
  if (empty($_POST["phone"])) {
    $phoneError = "This field is mandatory";
  } else {
    $phone = test_input($_POST["phone"]);
    if (!filter_var($phone, FILTER_VALIDATE_INT)) {
      $phoneError = "Invalid Contact Number";
    } else if (strlen($phone) < 10 || strlen($phone) > 10) {
      $phoneError = "Invalid Contact Number";
    }
  }
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Contact Us</title>
  <link href="images/favicon2.png" rel="shortcut icon">

</head>

<body class="body-wrapper">
  <?php
  include('header.php');
  ?>
  <section class="page-title bg-title overlay-dark">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="title">
            <h3>Contact Us</h3>
          </div>
          <ol class="breadcrumb p-0 m-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="section contact-form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h3>Get in <span class="alternate">Touch</span></h3>
            <p>Want to know about SURGE? Contact Us Now!!</p>
          </div>
        </div>
      </div>
      <form action="" class="row" method="post">
        <div class="col-md-6">
          <span style="color: red;padding-bottom:16px;"><?php echo $nameError; ?></span>
          <input type="text" class="form-control main" name="name" id="name" placeholder="Name">
        </div>
        <div class="col-md-6">
          <span style="color: red;padding-bottom:16px;"><?php echo $emailError; ?></span>
          <span style="color: white;padding-bottom:16px;"><?php echo $emailError; ?></span>
          <input type="email" class="form-control main" name="email" id="email" placeholder="Email">
        </div>
        <div class="col-md-12">
          <span style="color: red;padding-bottom:16px;"><?php echo $phoneError; ?></span>
          <input type="text" class="form-control main" name="phone" id="phone" placeholder="Phone">
        </div>
        <div class="col-md-12">
          <textarea name="message" id="message" class="form-control main" rows="10" placeholder="Your Message"></textarea>
        </div>
        <div class="col-12 text-center">
          <button name="submit" type="submit" class="btn btn-main-md">Send Message</button>
        </div>
      </form>
    </div>
  </section>

  <?php
  include('footer.php');
  ?>
</body>

</html>