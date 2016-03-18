<?php
    mysql_connect("localhost","root","") or die ("no se ha podido conectar a la BD");

    mysql_select_db("tablero") or die ("no se ha podido seleccionar la BD");

    $sql = "SELECT i.id,i.archivo_nombre
		FROM categoria_imagen as nc
		inner join imagen as i
		on nc.id_categoria_imagen=i.id_categoria_imagen
		where nc.nombre_categoria='agresiones'";

    $consulta = mysql_query($sql) or die ("No se pudo ejecutar la consulta");

    While ($registro=mysql_fetch_assoc($consulta)){
        echo "<img src=\"ver.php?id=".$registro['id']."\">";
        echo "<br>".$registro['archivo_nombre'];
        echo "<br> <br>";
    }

?>