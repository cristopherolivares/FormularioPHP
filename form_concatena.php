<?php

    $dato1= $_POST["txtnombre"]; // usamos un arreglo para almacenar  

    if ($dato1=="Cristopher"){
        echo "<h1>Hola</h1> " . $dato1;
        echo '<a href="Formulario.php">aquí</a>';

    }else {
        echo "Nombre no encontrado";
        echo "<br>";
        echo '<a href="Formulario.php">aquí</a>';
        
    }

        
?>