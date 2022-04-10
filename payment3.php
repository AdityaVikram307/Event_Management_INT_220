<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="css/paymentss.css">
    <?php
    include('header.php');
    ?>
</head>

<body>

    <div class="container">

        <form style="margin-top: 150px;" action="checkout-success.php" method="POST">

            <div class="row">

                <div class="col">

                    <h3 class="title">billing address</h3>

                    <div class="inputBox">
                        <span>Name :</span>
                        <input type="text" name="name" placeholder="Name">
                    </div>
                    <div class="inputBox">
                        <span>E-Mail :</span>
                        <input type="email" name="email" placeholder="E-Mail">
                    </div>
                    <div class="inputBox">
                        <span>Address :</span>
                        <input type="text" name="address" placeholder="Address">
                    </div>
                    <div class="inputBox">
                        <span>gender :</span>
                        <input type="text" name="gender" placeholder="Gender">
                    </div>
                    <div class="inputBox">
                        <span>City :</span>
                        <input type="text" name="city" placeholder="City">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>state :</span>
                            <input type="text" name="state" placeholder="State">
                        </div>
                        <div class="inputBox">
                            <span>zip code :</span>
                            <input type="text" name="zipcode" placeholder="Zip Code">
                        </div>
                    </div>

                </div>

                <div class="col">

                    <h3 class="title">payment</h3>

                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images/payment/card1.png" alt="">
                        <img src="images/payment/card2.png" alt="">

                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text" name="cardname" placeholder="Name On Card">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="number" name="cardnum" placeholder="Card Number">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text" name="month" placeholder="Month">
                    </div>

                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" name="year" placeholder="Year">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="password" name="cvv" maxlength="3" placeholder="CVV">
                        </div>
                    </div>

                </div>

            </div>

            <input type="submit" value="Pay $99" name="submit" class="submit-btn">

        </form>

    </div>

</body>

</html>