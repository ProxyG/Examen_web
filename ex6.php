<?php
$adresses = array("trabelsifedi000@gmail.com", "fady.trabelsi@yahoo.fr", "fedy.trabelsi@gmail.com", "FediTrabelsi@outlook.fr", "fedi.trabelsi@etudiant-isi.utm.tn");
$operateurs = array();
$explored = array();
foreach ($adresses as $adresse) {
    global $operateurs;
    $operateur = strpos($adresse, "@");
    $operateurs[] = substr($adresse, $operateur + 1);
}

foreach ($operateurs as $operateur) {
    global $operateurs;
    global $explored;
    $count = 0;
    if (!in_array($operateur, $explored)) {
        global $explored;
        $explored[] = $operateur;
        foreach ($operateurs as $op) {
            if ($op == $operateur) {
                $count++;
            }
        }
        echo "<div>";
        echo "L'opérateur $operateur est apparu $count fois";
        echo "</div>";
    }
}
?>