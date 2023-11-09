<?php
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];
    

    $sql = "UPDATE materias SET nombre='".$nombre."', semestre=".$semestre.", especialidad='".$especialidad."' WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location:ConsultarMateria.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarMateria.php'>Regresar a   Materia</a></h3>";
    }
?>