<?php

class Retangulo {
    private $largura;
    private $altura;

    function __construct($largura, $altura) {
        $this->largura = $largura;
        $this->altura = $altura;
    }

    function calcularArea() {
        return $this->largura * $this->altura;
    }

    function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$retangulo1 = new Retangulo(5, 10);
echo "Área do retângulo: " . $retangulo1->calcularArea() . "<br>";
echo "Perímetro do retângulo: " . $retangulo1->calcularPerimetro() . "<br>";



?>