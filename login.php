<?php
$server = "localhost";
$user = "raffi";
$pass = "12345";
$database = "aplikasipembayaranspp";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>