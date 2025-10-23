<?php
class Monoplaza{
    protected $nombre;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $cantPuntos;

public function __construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos) {
    $this->nombre = $nombre;
    $this->nacionalidad = $nacionalidad;
    $this->numero = $numero;
    $this->escuderia = $escuderia;
    $this->cantPuntos = $cantPuntos;
}

public function descripcion() {
    return sprintf("Piloto: $this->nombre, Nacionalidad: $this->nacionalidad, Nº: $this->numero, Escudería: $this->escuderia, Puntos: $this->cantPuntos");
}

public function posicionValida($posicion, $maxPilotos) {
        return $posicion >= 1 && $posicion <= $maxPilotos;
}

public function otorgarPuntos($posicion, $vueltaRapida = false) {
        
}

public function subirCategoria(...$datos) {
    
}

public function getPuntos() {
    return $this->cantPuntos;
}
public function setPuntos($puntos) {
    $this->cantPuntos = $puntos;
}
public function getNombre() {
        return $this->nombre;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getEscuderia() {
        return $this->escuderia;
    }
}
?>