<?php



Class Aluno{

    private $nome;
    private $nota1;
    private $nota2;
    private $nota3;

    function __construct($nome, $nota1, $nota2, $nota3)
    {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }

    function calcularMedia()
    {
        return ($this->nota1 + $this->nota2 + $this->nota3) / 3;
    }

    function classificar()
    {
        $media = $this->calcularMedia() >= 10 ? "Aprovado" : "Reprovado";
        return $media;
    }

    function apresentar()
    {
        echo "===============================<br>";
        echo "Nome: ".$this->nome."<br>";
        echo "Media: ".$this->calcularMedia()."<br>";
        echo "Classificação: ".$this->classificar()."<br>";
        echo "===============================<br>";

    }

}

$aluno1 = new Aluno("João", 15, 10, 13);
$aluno2 = new Aluno("Maria", 8, 9, 7);
$aluno3 = new Aluno("Pedro", 12, 14, 11);

$aluno1->apresentar();
$aluno2->apresentar();
$aluno3->apresentar();

