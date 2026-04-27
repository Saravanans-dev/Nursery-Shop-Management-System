<?php

$username = $_POST['username'];
$password = $_POST['password'];

if (!empty($username) && !empty($password)) {

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "nursery";

$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM register WHERE username=? AND password=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss",$username,$password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

echo "<script>
alert('Login Successful');
window.location.href='product.html';
</script>";

} else {

echo "<script>
alert('Invalid Username or Password');
window.location.href='login.html';
</script>";

}

$stmt->close();
$conn->close();

} else {

echo "All fields are required";

}

?>