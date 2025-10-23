<?php
require_once 'Monoplaza.php';

class F4 extends Monoplaza {
    private $paisCategoria;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $paisCategoria, $cantPuntos = 0) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos);
        $this->paisCategoria = $paisCategoria;
    }
    public function getPaisCategoria() {
        return $this->paisCategoria;
    }
    public function setPaisCategoria($paisCategoria) {
        $this->paisCategoria = $paisCategoria;
    }

    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $puntos = [25,18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($posicion, 30) && $posicion <= 10) {
            $this->cantPuntos += $puntos[$posicion-1];
        }
    }
    public function subirCategoria(...$datos) {
        $academia = $datos[0] ?? '';
        require_once 'F3.php';
        return new F3($this->nombre, $this->nacionalidad, $this->numero, $this->escuderia, $academia, $this->cantPuntos);
    }
    
}
?>