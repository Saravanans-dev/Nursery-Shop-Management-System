<?php

$conn = mysqli_connect("localhost","root","","nursery");

if(!$conn){
    die("Connection Failed");
}

// 🔥 delete all orders
$sql = "DELETE FROM orders";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "error";
}

?>