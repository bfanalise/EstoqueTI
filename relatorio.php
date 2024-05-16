<?php
include_once("scriptConect.php");
$select = "SELECT * FROM cadastro";
$result = $conn -> query($select);


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TrackOS Inventory System - Relatórios</title>
<link rel="stylesheet" href="styleRelatorio.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


@media (max-width: 768px) {
    .container {
        max-width: 100%;
        border-radius: 0;
        box-shadow: none;
        padding: 10px;
    }
}
</style>
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
    <h2>Relatórios de Estoque</h2>
    <div class="table-container">
        <table>
            <thead>
            </thead>
            <tbody>
                <tr>
                <th>Cód. Item</th>
                <th>Desc. Item</th>
                <th>Qtde. Estoque</th>
                <th>Prateleira</th>
                <th>Ação</th>
                </tr>
            </tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo"<tr>";
                    echo"<td><a href='editar.php'?id=$row[id]'>" . $row['codItem'] . "</a></td>";
                    echo"<td>" . $row['descItem'] . "</td>";
                    echo"<td>" . $row['qtdeEstoque'] ."</td>";
                    echo"<td>" . $row['prateleira'] . "</td>";
                    echo "<td><a class='bootst' href='scriptDelet.php?id=" . $row['id'] . "' id='deletar'>
                        <button type='button' class='btn btn-primary'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                        <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5'></path>
                        </svg>
                        DELETAR
                        </button></a></td>";
                    echo"</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
