<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar materia</title>
    <link rel="stylesheet" href="css/bootstrap.css"> 
    <script src="code.jquery.com_jquery-3.7.1.js"></script>
</head>
<body>
    <?php 
        include 'menu.php'; 
        include 'conexion.php';

        $id = $_GET["id"];

        $sql = "SELECT * FROM Materia WHERE id=".$id;

        $datos = $conexion->query($sql);
        
        $materias = $datos->fetch_assoc();

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12 card m-4 p-4">
                <h2>Editar materia</h2><hr>
                <form action="ActualizarMateria.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $materias["id"]; ?>">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $materias["nombre"]; ?>" name="nombre" type="text" class="form-control" placeholder="Teclea el nombre de la materia" required>
                    </div>
                    

                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input value="<?php echo $materias["semestre"]; ?>" name="semestre" type="number" class="form-control" placeholder="Teclea el semestre" required>
                    </div>
                    
                     
                    <div>
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                        <a href="ConsultarMateria.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center">
        <hr>
        CETIS 107 &copy; 2023
    </footer>

    <script src="js/bootstrap.js"></script>
</body>
</html>