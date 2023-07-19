<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spk_saw_main";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("koneksi gagal :" . $conn->connect_error);
}
