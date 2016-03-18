<?php
    mysql_connect("localhost","root","") or die ("no se ha podido conectar a la BD");
    mysql_select_db("tablero") or die ("no se ha podido seleccionar la BD");
    $sql = "SELECT id,archivo_nombre FROM imagen";
    $consulta = mysql_query($sql) or die ("No se pudo ejecutar la consulta");
    While ($registro=mysql_fetch_assoc($consulta)){
        echo "<img src=\"ver.php?id=".$registro['id']."\">";
        echo "<br> Nombre archivo: ".$registro['archivo_nombre'];
       
        
    }
?>