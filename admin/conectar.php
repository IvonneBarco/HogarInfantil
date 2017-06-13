<?php

function conectar() {

    $bd = mysqli_connect("localhost", "root", "", "bdhmercedes");
    if (!$bd) {
        echo "<h3>Conexión fallida</h3>";
        echo mysqli_error($bd);
        return NULL;
    }
    return $bd;
}

?>
