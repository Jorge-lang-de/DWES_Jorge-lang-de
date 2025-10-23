<?php
function obtenerDatosPiloto($numero) {
    $url = "https://api.openf1.org/v1/drivers?driver_number=$numero";
    $resultado = @file_get_contents($url);

    if (!$resultado) {
        echo "No se pudo obtener información del piloto $numero";
        return null;
    }

    $datos = json_decode($resultado, true);
    return isset($datos[0]) ? $datos[0] : null;
}

$piloto16 = obtenerDatosPiloto(16);
$piloto44 = obtenerDatosPiloto(44);

echo "<h2>Piloto 16</h2>";
print_r($piloto16);


echo "<h2>Piloto 44</h2>";
print_r($piloto44);

?>
