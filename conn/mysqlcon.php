<?php
$servername = "plearnjai.com";
$username = "plearnja_cpsu4";
$password = "0oyQt3aNOD";
$dbname = "plearnja_cpsu4";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>