<?php

require("../../database/conexao.php");

// echo($_POST["inputs"]);

switch ($_POST["acao"]) {

    case "inserir":

        $descricao = $_POST["descricao"];
        $peso = $_POST["peso"];
        $quantidade = $_POST["quantidade"];
        $cor = $_POST["cor"];
        $tamanho = $_POST["tamanho"];
        $valor = $_POST["valor"];
        $desconto = $_POST["desconto"];

        $sql = "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto) 
                VALUES ('$descricao', $peso, $quantidade, '$cor', '$tamanho', $valor, $desconto);";
    
        $deuCerto = mysqli_query($conexao, $sql);

        if($deuCerto){
            header("location: ../index.php");
        }else{
            $mensagem = "Erro ao cadastrar o produto";
            header("location: ./index.php?mensagem=$mensagem");
        }

    break;
}

?>