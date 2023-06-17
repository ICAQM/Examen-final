<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen final </title>
    <link href="Estilo.css" rel="stylesheet"/>
</head>
<body>
    <?php
        $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
        $conexion = new PDO('mysql:host=localhost; dbname=Final_0907_23_8974', 'root', '1234', $pdo_options);

        $select = $conexion->query("SELECT Codigo, Nombre, Precio, Existencia FROM Productos");
        ?>
        <h1>Tabla de Productos</h1>
        <table border="1" class="Tabla">
        <thead id="Encabezado">
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($select->fetchAll() as $Final_0907_23_8974) {?>
            <tr>
                <td><?php echo $Final_0907_23_8974["Codigo"] ?></td>
                <td><?php echo $Final_0907_23_8974["Nombre"] ?></td>
                <td><?php echo $Final_0907_23_8974["Precio"] ?></td>
                <td><?php echo $Final_0907_23_8974["Existencia"] ?></td>
            <?php } ?>            
  
</body>
</html>