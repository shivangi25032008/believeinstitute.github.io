<?php

session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){

$user = $result->fetch_assoc();

$_SESSION['name']=$user['name'];

header("Location: profile.php");

}

else{

echo "Invalid Login";

}

?>