<?php

    include 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $especialidad = $_POST["especialidad"];
    $semestre = $_POST["semestre"];
    



    $sql = "UPDATE materias SET nombre='".$nombre."', especialidad='".$especialidad."', semestre=".$semestre." WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: ConsultarMateria.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarMateria.php'>Regresar a Materia</a></h3>";
        $conexion->close();
    }

?>