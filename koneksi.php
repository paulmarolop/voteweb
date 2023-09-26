<?php

$conn = new mysqli("localhost", "root", "", "himsi_kkter2020");

if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
}

?>