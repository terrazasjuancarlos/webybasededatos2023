<?php 
        include 'menu.php'; 
        include 'conexion';

        $id = $_POST ['id'];
        $sql ="SELECT + FROM alumnos id=".$id;
        
        $datos = $conexion->query($sql);   
        $alumno = $datos->fetch_assoc()[0];   

?>