<?php
    include 'conexion.php';

    $nombre = $_POST["nombre"];
    
    $semestre = $_POST["semestre"];
    $especialidad = $_POST["especialidad"];
    $turno = $_POST["turno"];

    $sql = "INSERT INTO materias(nombre,  semestre, especialidad) VALUES('".$nombre."', '".$semestre."', '".$especialidad."')";

    if($conexion->query($sql) === TRUE){
        header("Location: ConsultarAlumnos.php");
        $conexion->close();
        exit;
    } else {
        echo "<h2>Ocurrio un error</h2> <p>Error: " .$sql . "<br>" . $conexion->error . "</p>";
        echo "<h3><a href='ConsultarAlumnos.php'>Regresar a alumnos</a></h3>";
    }
?>