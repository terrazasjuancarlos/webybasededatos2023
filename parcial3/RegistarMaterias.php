<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistrarMaterias</title>
</head>
<body>
    <div class="container">
            <div class="row">
                <div class="col-12 card p-4">
                    <form action="">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre de LA MATERIA" required>
                    </div>
                    <div class="form-group">
                        <label for="">semestre:</label>
                        <input name="semestre" type="text" class="form-control" placeholder="Teclea el semestre de LA MATERIA" required>
                    </div>
                    <div class="form-group">
                        <label for="">especialidad:</label>
                        <select name="especialidad" class="form-control" required>
                            <option value="">Selecciona la especialidad</option>
                            <option value="PROGRAMACION">PROGRAMACION</option>
                            <option value="CONTABILIDAD">CONTABILIDAD</option>
                            <option value="ELECTRONICA">ELECTRONICA</option>
                            <option value="OFIMATICA">OFIMATICA</option>
                            <option value="CONSTRUCCION">CONSTRUCCION</option>
                        </select>

                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary"  value="registrar" >
                        <a href="ConsultarMaterias.php" class="btn btn-danger">Cancelar</a>
                    </div>
                    </form>
                </div>
                
            </div>

    </div>
</body>
</html>