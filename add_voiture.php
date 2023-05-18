<?php
require_once("connect.php");
$sql = "select * from modele order by marque";
$couleur = array('cl0' => 'Rouge', 'cl1' => 'Blanche', 'cl2' => 'Noir', 'cl3' => 'Gris');

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="formulaire.php" method="post">
        <label for="">Immatriculation</label>
        <div><input type="text" name="immatriculation" id=""></div>
        <label for="">Couleur</label>
        <div>
            <select name="couleur" id="">
                <?php
                $couleurs = array('cl0' => 'Rouge', 'cl1' => 'Blanche', 'cl2' => 'Noir', 'cl3' => 'Gris');
                foreach ($couleurs as $key => $couleur) {
                    echo "<option>$couleur</option>";
                }
                ?>
            </select>
        </div>
        <label for="">Kilometrage</label>
        <div>
            <input type="text" name="kilometrage" id="">
        </div>
        <label for="">Modèle</label>
        <div>
            <select name="modele" id="">
                <?php
                require_once("connect.php");
                $sql = "select modele_voiture, marque from modele";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option>" . $row['modele_voiture'] . " " . $row['marque'] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <button type="submit">Crèer une nouvelle voiture</button>
    </form>
</body>

</html>