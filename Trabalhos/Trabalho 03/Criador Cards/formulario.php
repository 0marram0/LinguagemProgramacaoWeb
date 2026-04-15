<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <form action="card.php" method="POST">
        <h1>Criador de Cards de Estádios</h1>

        <label for="">Nome:</label>
        <input class="form-space" name="nome" type="text" placeholder="Nome...">
        <br>
        <label for="">Capacidade:</label>
        <input class="form-space"  name="capacidade" type="number" placeholder="Capacidade...">
        <br>
        <label for="">Descrição:</label>
        <textarea class="form-space"  name="desc" placeholder="Descrição..."></textarea>
        <br>
        <label for="">Imagem:</label>
        <input class="form-space"  name="img" type="text" placeholder="URL link...">
        <br>
        <button>Enviar</button>
    </form>
</body>

</html>