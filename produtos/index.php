<?php

require("../database/conexao.php");

$sql = "SELECT * FROM tbl_produto;";

$produtos = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <link rel="stylesheet" href="./produtos.css" />
    <title>Administrar Produtos</title>
</head>

<body>
    <header>
        <input type="search" placeholder="Pesquisar" />
    </header>
    <div class="content">
        <section class="produtos-container">
            <header>
                <button onclick="javascript:window.location.href ='./novo/'">Novo Produto</button>
                <button>Adicionar Categoria</button>
            </header>
            <main>
            <?php
                while($produto = mysqli_fetch_array($produtos)) {
            ?>
                <article class="card-produto">
                    <figure>
                        <img src="http://3.bp.blogspot.com/-u34_1MW1w5g/T_eNqYLmtFI/AAAAAAAAEP0/jnssgMNcS8Y/s1600/converse-all-star-dark-blue.png" />
                    </figure>
                    <section>
                        <span class="preco">R$ <?php echo($produto["valor"]); ?></span>
                        <span class="parcelamento">ou em <em>10x <?php echo($produto["valor"] /10) ?> sem juros</em></span>

                        <span class="descricao">Produto <?php echo($produto["descricao"]) ?> cor <?php echo($produto["cor"]) ?></span>
                        <span class="categoria">
                            <em>Calçados</em> <em>Vestuário</em><em>Calçados</em>
                        </span>
                    </section>
                    <footer>

                    </footer>
                </article>
                <?php
                }
                ?>
            </main>
        </section>
    </div>
    <footer>
        SENAI 2021 - Todos os direitos reservados
    </footer>
</body>

</html>