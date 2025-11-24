<?php
$conn = mysqli_connect("localhost","root","","db");
$stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
$stmt->bind_param("s", $_POST['user']);
$stmt->execute();
?>
