<?php
echo "<script src='script.js'></script>";
$etudiants = array();
$etudiants['Pierre'] = 12;
$etudiants['Paul'] = 8;
$etudiants['Jacques'] = 17;
$etudiants['Carol'] = 5;

$notesEcran = array();

function afficherTableau($etudiants)
{
    foreach ($etudiants as $key => $value) {
        global $notesEcran;
        $notesEcran[] = $value;
        echo "<div class='$key'>";
        echo "$key a eu la note $value<br>";
        echo "</div>";
    }
    echo "La taille du tableau est: " . count($etudiants) . "<br>";
}

afficherTableau($etudiants);

unset($etudiants['Carol']);

afficherTableau($etudiants);

$etudiants['Marie'] = 15;

afficherTableau($etudiants);

echo "<button onclick='trierNotes(" . json_encode($etudiants) . ")'>Trier notes</button>";

echo "<button onclick='calculerMoyenne(" . json_encode($notesEcran) . ")'>Calculer la moyenne</button>";

?>