<?php

$conn = new mysqli("localhost","root","","coaching_db");

if($conn->connect_error){
die("Connection Failed");
}

?>