<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
CADASTRO DE ALUNO
<br>
<br>

<!--
    comentario
-->

<form method="post" action="aluno_cadastro.php">
    Nome:<br>
    <input type="text" name="alu_nome" maxlength="100">
    <br>
    <br>

    Idade:<br>
    <input type="number" name="alu_idade">

    <br>
    <br>

    Status:<br>
    <select name="alu_status">
        <option value="A">Ativo</option>
        <option value="I">Inativo</option>
    </select>

    <br>
    <br>

    <input type="submit" name="acao" value="SALVAR">
</form>
<br>
<a href="index.php">Home</a>

</body>
</html>