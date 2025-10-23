<?php
require_once 'Monoplaza.php';

class F3 extends Monoplaza {
    private $academia;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $academia, $cantPuntos = 0) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $cantPuntos);
        $this->academia = $academia;
    }
    public function getAcademia() {
        return $this->academia;
    }
    public function setAcademia($academia) {
        $this->academia = $academia;
    }
    public function otorgarPuntos($posicion, $vueltaRapida = false) {
        $puntos = [10,8,7,6,5,4,3,2,1];
        if ($this->posicionValida($posicion, 30) && $posicion <= 9) {
            $this->cantPuntos += $puntos[$posicion-1];
        }
        
    }

    public function subirCategoria(...$datos) {
        $tieneSuperlicencia = $datos[0] ?? false;
        require_once 'F2.php';
        return new F2($this->nombre, $this->nacionalidad, $this->numero, $this->escuderia, $tieneSuperlicencia, $this->cantPuntos);
    }
}
?>