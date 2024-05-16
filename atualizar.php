<?php
include_once("scriptConect.php");

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $codItem = $_POST['codItem'];
    $descItem = $_POST['descItem'];
    $qtdeEstoque = $_POST['qtdeEstoque'];
    $prateleira = $_POST['prateleira'];

    // Correção: Remova a repetição de descItem na consulta SQL
    $sqlUpdate = "UPDATE cadastro SET codItem = '$codItem', descItem = '$descItem', qtdeEstoque = '$qtdeEstoque', prateleira = '$prateleira' WHERE id = '$id'";

    // Correção: Execute a consulta SQL corretamente usando $sqlUpdate, sem aspas ao redor
    $resultado = $conn->query($sqlUpdate);

    // Verifica se a consulta foi bem-sucedida
    if($resultado){
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar registro: " . $conn->error;
    }
}

// Correção: Redireciona para a página relatorio.php após a atualização
header('Location: relatorio.php');
?>
