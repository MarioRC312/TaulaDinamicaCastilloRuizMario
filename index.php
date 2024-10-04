<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tabla</title>
</head>
<body>
    <?php
        $vALUMNE = array (
            array(
                "Nom" => "Mario",
                "Cognom1" => "Ruiz",
                "Cognom2" => "Castillo",
                "dataNaix" => "03/12/2004",
                "dni" => "49362352M"
            ),
            array(
                "Nom" => "Jan",
                "Cognom1" => "Ferrer",
                "Cognom2" => "Abad",
                "dataNaix" => "15/09/1401",
                "dni" => "78900912I"
            ),
            array(
                "Nom" => "Oriol",
                "Cognom1" => "Casacuberta",
                "Cognom2" => "Tijera",
                "dataNaix" => "01/02/1801",
                "dni" => "82120912O"
            )
        );

        crearTabla($vALUMNE);

        function crearTabla($vALUMNE)
        {
            echo "<table border='1'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th>Nom</th>"; 
            echo "<th>Primer Cognom</th>";
            echo "<th>Segon Cognom</th>";
            echo "<th>Data Naixament</th>";
            echo "<th>DNI</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach($vALUMNE as $alum)
            {
                echo "<tr>";
                echo "<td>". $alum['Nom'] ."</td>";
                echo "<td>". $alum['Cognom1'] ."</td>";
                echo "<td>". $alum['Cognom2'] ."</td>";
                echo "<td>". $alum['dataNaix'] ."</td>";
                echo "<td>". $alum['dni'] ."</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
        }
        
    ?>
</body>
</html>