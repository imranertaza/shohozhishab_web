<?php
    include 'conection.php';

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $postcode = $_POST['postcode'];
    $address = $_POST['address'];
    $package_id = $_POST['package_id'];
    $charge = $_POST['charge'];
    $payment_method_id = $_POST['payment_method_id'];

    //package data get by package_id (start)
    $sql = "SELECT * FROM packages WHERE package_id=".$package_id;
    $result = mysqli_query($DB, $sql);
    $pack = mysqli_fetch_array($result);

    $price = $pack['price'];
    $total = $pack['price']+$charge;
    //package data get by package_id (end)

    if($payment_method_id == 1){ $payment_phone = $_POST['roket_phone']; $payment_transaction_id = $_POST['roket_id']; }

    if($payment_method_id == 2){ $payment_phone = $_POST['bkash_phone']; $payment_transaction_id = $_POST['bkash_id']; }

    if($payment_method_id == 3){ $payment_phone = $_POST['nagad_phone']; $payment_transaction_id = $_POST['nagad_id']; }

    if (empty($payment_phone) && $payment_transaction_id){
        header('Location: get_started.php?data='.$package_id);
    }

    $sql = "INSERT INTO billing (first_name, last_name, email, phone, city, postcode, address, package_id, payment_method_id, price, charge, total, payment_phone, payment_transaction_id, createdBy)
    VALUES ('$first_name', '$last_name', '$email', '$phone', '$city', '$postcode', '$address', '$package_id', '$payment_method_id', '$price', '$charge', '$total', '$payment_phone', '$payment_transaction_id', '1')";

    if ($DB->query($sql) === TRUE) {
        echo "New record created successfully";
        mysqli_close($DB);
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $DB->error;
    }
?>