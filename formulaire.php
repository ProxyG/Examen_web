<?php
require_once("connect.php");
$imm = $_POST['immatriculation'];
$coul = $_POST['couleur'];
$kil = $_POST['kilometrage'];
$mod = $_POST['modele'];
$sql = "select * from voiture where immatriculation = '$imm'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "Ce numero d'immatriculation existe deja";
} else {
    $sql = "Insert into voiture values(1,'$imm','$coul','$kil','$mod')";
    if (mysqli_query($conn, $sql)) {
        echo "Line added successfully";
    }
}
?>