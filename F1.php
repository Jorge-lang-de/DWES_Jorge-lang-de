<?php
require_once 'Monoplaza.php';
require_once 'FAcademy.php';

class F1 extends Monoplaza {
    private $patrocinador;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $patrocinador = '', $cantPuntos = 0) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos);
        $this->patrocinador = $patrocinador;
    }

    public function getPatrocinador($patrocinador){
        return $this->$patrocinador;
    }

    public function setPatrocinador($patrocinador) {
        $this->patrocinador = $patrocinador;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $tabla = [25,18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($posicion, 22) && $posicion <= 10) {
            $this->cantPuntos += $tabla[$posicion - 1];
            if ($vueltaRapida) {
                $this->cantPuntos += 1;
            }
        }
    }

    public function subirCategoria(...$datos) {
        $potenciaMax = $datos[0] ?? 0;
        return new FAcademy($this->nombre, $this->nacionalidad, $this->numero, $this->escuderia, $potenciaMax, $this->cantPuntos);
    }
}
?>
