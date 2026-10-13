<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="results.php" method="post">
        <label>Nome: </label>
        <input type="text" name="nome" id="nome">
        <br>
        <label>Apelido: </label>
        <input type="text" name="apelido" id="apelido">
        <br>
        <label>Aluno de CTESP Informatica: </label>
        <input type="checkbox" name="aluno" id="aluno" checked>
        <br>
        <label>Idade: </label>
        <input type="radio" name="idade" id="idade" value="<=20">
        <label> <=20</label>
        <br>
        <input type="radio" name="idade" id="idade" value="21-30" checked>
        <label>21-30</label>
        <br>
        <input type="radio" name="idade" id="idade" value="31-40" >
        <label >31-40</label>
        <br>
        <input type="radio" name="idade" id="idade" value="40" >
        <label >>40</label>
        <br>
        <label>Localidade: </label>
        <select name="localidade" id="localidade">
            <option value="viana">Viana do Castelo</option>
            <option value="porto">Porto</option>
            <option value="braga">Braga</option>
            <option value="lisboa">Lisboa</option>
        </select>
        <br>
        <br>
        <label>Sugestões: </label>
        <textarea name="sugestoes" id="sugestoes" rows="4" cols="50" placeholder="Indique aqui as suas sugestões"></textarea>
        <br>
        <input type="submit" value="Submit">
    
        <input type="reset" value="Reset">
    </form>
</body>
</html>