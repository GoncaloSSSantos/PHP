<?php

Class Pessoa{

    private $nome;
    private $idade;

    function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function apresentar()
    {
        echo "Olá, meu nome é ".$this->nome." e tenho ".$this->idade." anos<br>";
    }

}
   

$pessoa1 = new Pessoa("João", 25);
$pessoa2 = new Pessoa("Maria", 30);

$pessoa1->apresentar();
$pessoa2->apresentar();
?>