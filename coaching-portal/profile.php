<?php
session_start();

if(!isset($_SESSION['name'])){
header("Location: login.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Profile</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

<h2>Welcome Student</h2>

<h3><?php echo $_SESSION['name']; ?></h3>

<p>You are successfully logged in to Coaching Portal.</p>

<a href="logout.php">Logout</a>

</div>

</body>
</html>