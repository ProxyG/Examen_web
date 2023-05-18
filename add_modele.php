<?php
require("connect.php");
$sql = "Insert into modele values(1,'Renault','Clio','4CV','Essence');";
$sql .= "Insert into modele values(2,'608','peugeot','7CV','Gazoile');";
$sql .= "Insert into modele values(3,'Kia Picanto','Kia','4CV','Essence');";
$sql .= "Insert into modele values(4,'Clio','Renault','4CV','Essence');";
$sql .= "Insert into modele values(5,'Sorento','Kia','12CV','Gazoile');";

mysqli_query($conn, "SET NAMES 'utf8'");
if (mysqli_multi_query($conn, $sql)) {
    echo "Lines inserted correctly";
} else {
    echo "Error in inserting lines";
}
?>