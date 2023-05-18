<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php
    function afficherTableau()
    {
        include 'mestableaux.php';
        echo "<table><tr><td>PRENOM</td><td>NOM</td><td>AGE</td><td>VILLE</td></tr>";
        foreach ($personnes as $key => $value) {
            echo "<tr>";
            foreach ($value as $key1 => $value1) {
                echo "<td>$value1</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    afficherTableau();
    ?>
</body>

</html>