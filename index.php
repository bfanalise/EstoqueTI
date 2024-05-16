<?php
    include_once("scriptConect.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TI Inventory</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
    
</style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>TI Inventory</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="relatorio.php">Relatório</a>
            <a href="#">Dashboard</a>
        </nav>
    </div>
    <h2>Adicionar Item ao Estoque</h2>
    <form method="POST" action="scriptSubmit.php">
        <label for="codItem">Cod. Item:</label>
        <input type="text" id="codItem" name="codItem" required>

        <label for="descItem">Desc. Item:</label>
        <input type="text" id="descItem" name="descItem" required>

        <label for="qtdeEstoque">Qtde. Estoque:</label>
        <input type="number" id="qtdeEstoque" name="qtdeEstoque" required>

        <label for="prateleira">Prateleira:</label>
        <input type="text" id="prateleira" name="prateleira" required>

        <input type="submit" value="Salvar" name="cadastrar">
    </form>
</div>
</body>
</html>
