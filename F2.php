<?php
require_once 'Monoplaza.php';
require_once 'F1.php';

class F2 extends Monoplaza {
    private $tieneSuperLicencia;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $tieneSuperLicencia = false, $cantPuntos = 0) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos);
        $this->tieneSuperLicencia = $tieneSuperLicencia;
    }

    public function getTieneSuperLicencia() {
        return $this->tieneSuperLicencia;
    }
    public function setTieneSuperLicencia($tieneSuperLicencia) {
        $this->tieneSuperLicencia = $tieneSuperLicencia;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $puntos = [10,8,7,6,5,4,3,2,1];
        if ($this->posicionValida($posicion, 24) && $posicion <= 9) {
            $this->cantPuntos += $puntos[$posicion - 1];
        }
        if ($vueltaRapida && $posicion <= 10) {
            $this->cantPuntos += 1;
        }
    }

    public function subirCategoria(...$datos) {
        $patrocinador = $datos[0] ?? '';
        return new F1($this->nombre, $this->nacionalidad, $this->numero, $this->escuderia, $patrocinador, $this->cantPuntos);
    }
}
?>