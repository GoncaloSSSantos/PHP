<?php

echo "<h2>Listagem de resultados</h2>";

$n=$_POST['nome'];
echo "Nome: $n <br>";
$a=$_POST['apelido'];
echo "Apelido: $a <br>";
$aluno=$_POST['aluno'];
echo "Aluno de CTESP Informática: $aluno <br>";
$idade=$_POST['idade'];
echo "Idade: $idade <br>";
$localidade=$_POST['localidade'];
echo "Localidade: $localidade <br>";
$sugestoes=$_POST['sugestoes'];
echo "Sugestões: $sugestoes <br>";

?>