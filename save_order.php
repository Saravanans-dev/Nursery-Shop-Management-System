<?php

$conn = mysqli_connect("localhost","root","","nursery");

if(!$conn){
    die("Connection Failed");
}

// ✅ safe values
$name = $_POST['name'] ?? '';
$phone = $_POST['phone'] ?? '';
$address = $_POST['address'] ?? '';
$city = $_POST['city'] ?? '';
$pincode = $_POST['pincode'] ?? '';
$payment = $_POST['payment_method'] ?? '';
$total = $_POST['total_amount'] ?? 0;

// 🔥 validation
if($name=='' || $phone=='' || $address=='' || $city=='' || $pincode==''){
    echo "empty";
    exit;
}

// ✅ insert query
$sql = "INSERT INTO orders (name, phone, address, city, pincode, payment_method, total_amount, status)
VALUES ('$name','$phone','$address','$city','$pincode','$payment','$total','pending')";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "error";
}

?>