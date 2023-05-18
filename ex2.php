<?php
include 'mestableaux.php';

echo "Le nombre d\'éléments du tableau est ".count($pays_population);
foreach($pays_population as $key=>$value){
    if($value > 20000000){
        echo "$key<br>";
    }
}
?>