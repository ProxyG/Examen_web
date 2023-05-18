<?php
require_once("connect.php");
$sql = "select * from modele order by marque";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<td>id</td><td>modele_voiture</td><td>marque</td><td>puissance</td><td>carburant</td>";
    echo "</tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['modele_voiture'] . "</td>";
        echo "<td>" . $row['marque'] . "</td>";
        echo "<td>" . $row['puissance'] . "</td>";
        echo "<td>" . $row['carburant'] . "</td>";
        echo "</tr>";
    }
}
?>