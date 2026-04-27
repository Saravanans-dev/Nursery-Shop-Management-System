<?php
$conn = mysqli_connect("localhost","root","","nursery");

$id = $_POST['id'];

// ✅ status மட்டும் update
$sql = "UPDATE orders SET status='delivered' WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "error";
}
?>