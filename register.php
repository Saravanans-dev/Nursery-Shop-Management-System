<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nursery";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

// 🔥 SAFE METHOD
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if(!empty($username) && !empty($email) && !empty($password)){

    $sql = "INSERT INTO register (username,email,password) VALUES (?,?,?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss",$username,$email,$password);

    if($stmt->execute()){
        echo "success";
    }else{
        echo "error";
    }

    $stmt->close();
    $conn->close();

}else{
    echo "empty";
}

?>