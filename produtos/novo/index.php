<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../styles-global.css" />
  <link rel="stylesheet" href="./novo.css" />
  <title>Administrar Produtos</title>
</head>

<body>
  <header>
    <input type="search" placeholder="Pesquisar" />
  </header>
  <div class="content">
    <section class="produtos-container">
        <?php
          if(isset($_GET["mensagem"])) {
        ?>
          <div class="mensagem">
            <?php echo($_GET["mensagem"]); ?>
          </div>
        <?php
          }
        ?>
      <main>
      
        <form class="form-produto" method="POST" action="actions.php">
          <h1>Cadastro de produto</h1>
          <input type="hidden" name="acao" value="inserir" required>
          <div class="input-group span2">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" required>
          </div>
          <div class="input-group">
            <label for="peso">Peso</label>
            <input type="number" name="peso" required>
          </div>
          <div class="input-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" required>
          </div>
          <div class="input-group">
            <label for="cor">Cor</label>
            <input type="text" name="cor"  required>
          </div>
          <div class="input-group">
            <label for="tamanho">Tamanho</label>
            <input type="text" name="tamanho" >
          </div>
          <div class="input-group">
            <label for="valor">Valor</label>
            <input type="number" name="valor"  required>
          </div>
          <div class="input-group">
            <label for="desconto">Desconto</label>
            <input type="number" name="desconto" >
          </div>
          <button onclick="javascript:window.location.href = '../'">Cancelar</button>
          <button>Salvar</button>
        </form>
      </main>
    </section>
  </div>
  <footer>
    SENAI 2021 - Todos os direitos reservados
  </footer>
  <script type="text/javascript">
      setTimeout(() => {
        document.querySelector(".mensagem").style.display = "none";
      }, 3000);
  </script>
</body>

</html>