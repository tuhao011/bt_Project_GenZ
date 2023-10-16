<?php
$conn = mysqli_connect("localhost","root","","product");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully"
?>