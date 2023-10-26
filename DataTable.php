<?php
    //Se crea la conexión con la DB
    $connection = mysqli_connect("127.0.0.1", "root", "Mralex827", "zzaprueba");
    
    //Suelta error si la conexión falla
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //Se crea la querry para la funcionalidad de la DB
    $query = "SELECT * FROM Inventario";

    //Acciona la querry
    $stmt = mysqli_query($connection, $query);
    error_log($stm);

    //Se activa el texto si la conexión fue exitosa
    //echo 'Estoy conectado hermano';

    //Cierra la petición de la DB
    //mysqli_close($connection);
    ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Display</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
<div>
    <table>
        
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad</th>
        </tr>
        
        <tbody>
            <!--Se colocan los datos dentro de la tabla-->
            <?php
                while ($row = mysqli_fetch_assoc($stmt)){ ?>
                
                <tr>
                    <td><?php echo $row ['IDProducto']; ?></td>
                    <td><?php echo $row ['Nombre']; ?></td>
                    <td><?php echo $row ['Cantidad']; ?></td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
