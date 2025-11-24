<?php
$conn = mysqli_connect("localhost","root","","db");
$query = "SELECT * FROM users WHERE username='" . $_POST['user'] . "'";
mysqli_query($conn, $query);
?>
