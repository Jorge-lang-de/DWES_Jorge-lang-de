<?php
require_once 'Monoplaza.php';

class FAcademy extends Monoplaza {
    private $potenciaMax;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $potenciaMax, $cantPuntos = 0) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos);
        $this->potenciaMax = $potenciaMax;
    }
    public function getPotenciaMax() {
    return $this->potenciaMax;
}
    public function setPotenciaMax($potenciaMax) {
    $this->potenciaMax = $potenciaMax;
}
    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($posicion, 18)) {
            if ($posicion <= count($tabla)) {
                $this->cantPuntos += $tabla[$posicion - 1];
                if ($vueltaRapida) {
                    $this->cantPuntos += 1;
                }
            }
        }
    }
    public function subirCategoria(...$datos) {
        $pais = $datos[0] ?? '';
        require_once 'F4.php';
        return new F4($this->nombre, $this->nacionalidad, $this->numero, $this->escuderia, $pais, $this->cantPuntos);
    }
}
?>

