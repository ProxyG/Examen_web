<?php
$produits = array('Armoire', 'Tale', 'Chaise', 'Comode');
$clients = array('Fedi', 'Foued', 'Malak', 'Walaa');
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 1</title>
</head>

<body>
    <form action="">
        <label for="">Selectionner le client: </label>
        <select name="" id="">
            <?php
            foreach ($clients as $client) {
                echo "<option>$client</option>";
            }
            ?>

        </select>
    </form>
</body>

</html>