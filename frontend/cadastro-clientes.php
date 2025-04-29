<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./assets/css/fundo.css">
</head>
<body>
    <form action="../backend/cadastro-clientes.php" method="POST">
        <input type="text" name="nome" placeholder="nome" required><br>
        <input type="number" name="idade" placeholder="idade" required><br>
        <input type="text" name="email" placeholder="email" required><br>
        <input type="text" name="cidade" placeholder="cidade" required><br>
        <button type="submit">cadastrar</button>
    </form>
</body>
</html>