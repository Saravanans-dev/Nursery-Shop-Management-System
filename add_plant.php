<?php

$conn = mysqli_connect("localhost","root","","nursery");

if(!$conn){
die("Connection Failed");
}

$name = $_POST['plantname'];
$price = $_POST['plantprice'];
$image = $_POST['plantimage'];

$sql = "INSERT INTO plants(name,price,image)
VALUES('$name','$price','$image')";

if(mysqli_query($conn,$sql)){
echo "success";
}else{
echo "error";
}

?>