<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

    <h1>Cadastro de pessoas</h1>
    
    <form action="form_exec.php" method="POST">
        <label for="">Nome: </label>
        <input name="nome" type="text" placeholder="Informe o nome">
        <br>
        <label for="">Idade: </label>
        <input name="idade" type="number" placeholder="Informe a idade">
        <br>
        <button>Enviar</button>
    </form>
    

</body>
</html>