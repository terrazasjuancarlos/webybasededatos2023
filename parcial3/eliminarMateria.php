<?php

    include 'conexion.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM materias where id = ".$id;

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