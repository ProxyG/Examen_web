<?php
require("connect.php");
$sql = "Create table voiture(
    id integer primary key,
    immatriculation varchar(20),
    couleur varchar(20),
    kilometrage varchar(20),
    modele varchar(20))";
mysqli_query($conn, "SET NAMES 'utf8'");
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully";
} else {
    echo "Error in creating the table";
}
?>