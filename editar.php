<?php
include_once("scriptConect.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $select = "SELECT * FROM cadastro WHERE id = $id";
    $result = $conn->query($select);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $codItem = $row['codItem'];
        $descItem = $row['descItem'];
        $qtdeEstoque = $row['qtdeEstoque'];
        $prateleira = $row['prateleira'];
    } else {
        echo "Item não encontrado.";
        exit();
    }
} else {
    echo "ID do item não especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Item</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="header">
        <h1>TrackOS Inventory System</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="relatorio.php">Relatórios</a>
            <a href="#">Dashboard</a>
        </nav>
    </div>
    <h2></h2>
    <h2>Editar Item</h2>
    <form action="atualizar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="codItem">Cód. Item:</label>
        <input type="text" id="codItem" name="codItem" value="<?php echo $codItem; ?>"><br><br>
        <label for="descItem">Desc. Item:</label>
        <input type="text" id="descItem" name="descItem" value="<?php echo $descItem; ?>"><br><br>
        <label for="qtdeEstoque">Qtde. Estoque:</label>
        <input type="number" id="qtdeEstoque" name="qtdeEstoque" value="<?php echo $qtdeEstoque; ?>"><br><br>
        <label for="prateleira">Prateleira:</label>
        <input type="text" id="prateleira" name="prateleira" value="<?php echo $prateleira; ?>"><br><br>
        <input type="submit" value="update" name="update">
    </form>
</div>
</body>
</html>
