<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$class = $_POST['class'];
$board = $_POST['board'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];

$sql = "INSERT INTO students(name,email,password,class,board,subject,phone)
VALUES('$name','$email','$password','$class','$board','$subject','$phone')";

if($conn->query($sql)){

echo "Registration Successful";
echo "<br><a href='login.html'>Login Now</a>";

}

else{

echo "Error";

}

?>