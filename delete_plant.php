<?php

$conn = mysqli_connect("localhost","root","","nursery");

$id = $_POST['id'];

$sql = "DELETE FROM plants WHERE id='$id'";

if(mysqli_query($conn,$sql)){
    echo "success";
}else{
    echo "error";
}

?>