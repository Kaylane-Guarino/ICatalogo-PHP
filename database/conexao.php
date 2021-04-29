<?php

const HOST = "localhost";
const USER = "root";
const PASSWORD = "Nnkm@2420";
const DATABASE = "icatalogo";

$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

// $sql = " SELECT * FROM tbl_produto ";

// $resultado = mysqli_query($conexao, $sql);

// if($resultado == false){
//     echo mysqli_error($conexao);
//     die();
// }

// $inputs = "Minha nova tarefa";

// $sqlInsert = "INSERT INTO tbl_task (descricao) VALUES ('$inputs')";

// mysqli_query($conexao, $sqlInsert);

?>