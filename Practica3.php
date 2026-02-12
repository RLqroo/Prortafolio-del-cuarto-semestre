<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Práctica 3 - Tabla de Multiplicación 16x16</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
            width: 30px;
            height: 30px;
        }
        tr:first-child th, tr:first-child td, tr th:first-child, tr td:first-child {
            background-color: #eee;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <h1>Práctica 3: Tabla de Multiplicación (16x16)</h1>

    <table>

    <?php
        $tamano = 16; 

        for ($i = 0; $i < $tamano; $i++) {

            echo "<tr>";

            for ($j = 0; $j < $tamano; $j++) {
                
                $resultado = $i * $j;
            
                echo "<td>" . $resultado . "</td>";
            }

           
            echo "</tr>";
        }
    ?>

    </table>

</body>
</html>
