<?php
require_once '../config/validate2.php';
?>
<?php
require_once("../config/config.php");
$query = "SELECT id,descripción,cantidad,categoría,fecha  FROM dinero  ";
$result = $conexion->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col">
                <h1>Gastos <a href="form_insert.php" class="btn btn-primary"> añadir</a> 
                <a href="../index.php" class="btn btn-dark style="margin-left: 5px;">Regresar</a></h1>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>descripción	</th>
                            <th>cantidad</th>
                            <th>Categoria</th>
                            <th>Fecha de regristo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                       while($row = $result-> fetch_assoc()){

                        ?>
                      <tr>
                            <td><?php echo $row["id"]; ?></td>                            
                            <td><?php echo $row["descripción"]; ?></td>                           
                            <td><?php echo $row["cantidad"]; ?></td>
                            <td><?php echo $row["categoría"]; ?></td>
                            <td><?php echo $row["fecha"]; ?></td>
                            <td>
                                <a href="form_undate.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                                <a href="../config../delete_spending.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>