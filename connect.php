<?php
$conn = mysqli_connect("localhost", "root", "", "circulation_vehicule");
mysqli_set_charset($conn, "utf8");
if (!$conn) {
    die("Error in connection " . mysqli_connect_error());
} else
    echo "Connected successfully<br>";
?>