<?php
    include_once("scriptConect.php");

    if(isset($_POST["cadastrar"])){
        $codItem = $_POST["codItem"];
        $descItem = $_POST["descItem"];
        $qtdeEstoque = $_POST["qtdeEstoque"];
        $prateleira = $_POST["prateleira"];
    }

    if(!$conn){
        die("Houve um erro." . mysqli_connect_error());
    }

    $insert = "INSERT INTO cadastro  VALUES (DEFAULT, '$codItem', '$descItem', '$qtdeEstoque', '$prateleira')";
    $result = mysqli_query($conn, $insert);

    if($result){
        header('Location: index.php');
    }