<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
    <title>Data Display</title>
</head>
<body>
    <div>
    <?php
    $connection = mysqli_connect("127.0.0.1", "root", "Mralex827", "zzaprueba");
    
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM Inventario";
    $stmt = mysqli_query($connection, $query);
    error_log($stm);

    while ($row = mysqli_fetch_assoc($stmt)) {
        //var_dump($row);
        echo $row['IDProducto'] . '<br>';
        echo $row['Nombre'] . '<br>';
        echo $row['Cantidad'] . '<br>' . '<br>';
    }

    echo 'Estoy conectado hermano';

    //mysqli_close($connection);
    ?>
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cantidad</th>
        </tr>
        <tr>
            <td><?php echo $row['IDProducto'];?></td>
            <td>Ejemplo 1</td>
            <td>10</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Ejemplo 2</td>
            <td>5</td>
    </table>
</body>
</html>
