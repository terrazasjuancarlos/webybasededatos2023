<?php

    include 'conexion.php';
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $especialidad = $_POST["especialidad"];
    $semestre = $_POST["semestre"];
    

    $sql = "UPDATE Materias SET nombre='".$nombre."', especialidad  $especialidad='".$especialidad."', semestre=".$semestre." WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        header("Location: ConsultarMaterias.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrió un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarMaterias.php'>Regresar a Materias</a></h3>";
        $conexion->close();
    }

?>