<?php
/*  Name : Galal
    Phone : 01000498488
    Product: Laptop
    City:   Alex
    Delivery Tax : 50 EGP
    Price: 15000 EGP
    VAT:14%
    VAT value:2100 EGP
    Price After VAT: 17100 EGP
    Discount:20%
    Discount Value:3420 EGP
    Price After Discount:13680 EGP
    Total Price:13730 EGP
*/
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    # code...
    http_response_code(405);
    echo 'This Method Not Allowed';
    die;
}
define("Vat", 0.14);
$vat_value = $price * Vat ;
$price_after_vat = $price + $vat_value;
$discountPercentage = $discount * 100;
$discountValue = $price_after_vat * $discount;
$priceAfterDiscount = $price_after_vat - $discountValue;
$totalPrice = $priceAfterDiscount + $delivery;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
    if ($_POST['product'] == 'Laptop') {
        # code...
        $price = 15000;
        $discount = 0.2;
    } elseif ($_POST['product'] == 'Mobile') {
        # code...
        $price = 12000;
        $discount = 0.1;
    } elseif ($_POST['product'] == 'Tv') {
        # code...
        $price = 1000;
        $discount = 0.05;
    } else {
        # code...
        $price = 250;
        $discount = 0;
    }
}
switch ($_POST['City']) {
    case 'Cairo':
        # code...
        $delivery = 0;
        break;
    case 'Alex':
        # code...
        $delivery = 50;
        break;
    default:
        # code...
        $delivery = 200;
}


?>
<!doctype html>
<html lang="en">

<head>
    <title>Invoice</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-4 offset-4">
                <div class="alert alert-success" role="alert">
                    <ul>
                        <li> Name : <?= $_POST['name'] ?> </li>
                        <li> Phone : <?= $_POST['phone'] ?> </li>
                        <li> Product: <?= $_POST['product'] ?> </li>
                        <li> City: <?= $_POST['City']  ?> </li>
                        <li> Delivery Tax : <?= $delivery ?> EGP </li>
                        <li> Price: <?= $price ?> EGP </li>
                        <li> VAT:<?= Vat * 100 ?>% </li>
                        <li> VAT Value:<?= $vat_value ?> EGP </li>
                        <li> Price After VAT: <?= $price_after_vat ?> EGP </li>
                        <li> Discount:<?= $discountPercentage ?>% </li>
                        <li> Discount Value:<?= $discountValue ?> EGP </li>
                        <li> Price After Discount:<?= $priceAfterDiscount ?> EGP </li>
                        <li> Total Price:<?= $totalPrice ?> EGP </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>