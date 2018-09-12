<?php
 
$conn = new mysqli("localhost", "root", "", "prod");
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
 
?>