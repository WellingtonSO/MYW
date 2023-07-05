<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Khula&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MYW</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="menu">
    <ul>
      <li><a href="descartes.html">Descartes</a></li>
      <li><a href="dicas.html">Dicas</a></li>
      <li class="entrar"><a href="login.html">Entrar</a></li>
    </ul>
  </nav>


  <nav class="descartesM">
    <form method="POST">
      <h2 style="text-align:justify;">Descartes:</h2><br>

      <?php if ($usuarioLogado) { ?>
        <label for="tipo_pessoa">Tipo de Pessoa:</label>
        <input type="radio" id="pessoa_fisica" name="tipo_pessoa" value="Pessoa Física" required> Pessoa Física
        <input type="radio" id="pessoa_juridica" name="tipo_pessoa" value="Pessoa Jurídica" required> Pessoa Jurídica<br>

        <label for="bairro">Bairro:</label>
        <select id="bairro" name="bairro" required>
          <option value="bairro1">Capão Raso</option>
          <option value="bairro2">CIC</option>
          <option value="bairro3">Novo Mundo</option>
          <option value="bairro4">Portão</option>
        </select><br>
      <?php } ?>

      <label for="t_residuo">Tipo de Resíduo:</label>
      <select id="t_residuo" name="t_residuo">
        <option value="madeira">Madeira</option>
        <option value="metal">Metal</option>
        <option value="papel">Papel</option>
        <option value="pilha">Pilhas</option>
        <option value="plastico">Plástico</option>
      </select><br>

      <label for="peso">Peso:</label>
      <input type="number" id="peso" name="peso" min="0" max="99" step="1" required>
      <span>Kg</span><br>

      <input type="submit" value="Procurar">
    </form>

    <?php
    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Processa os dados do formulário
      $tipoPessoa = isset($_POST["tipo_pessoa"]) ? $_POST["tipo_pessoa"] : "";
      $bairro = isset($_POST["bairro"]) ? $_POST["bairro"] : "";
      $tipoResiduo = isset($_POST["t_residuo"]) ? $_POST["t_residuo"] : "";
      $peso = isset($_POST["peso"]) ? $_POST["peso"] : "";

      // Exemplo de exibição do resultado
      echo "<h3>Resultado da pesquisa:</h3>";
      echo "<p>Tipo de Pessoa: " . $tipoPessoa . "</p>";
      echo "<p>Bairro: " . $bairro . "</p>";
      echo "<p>Tipo de Resíduo: " . $tipoResiduo . "</p>";
      echo "<p>Peso: " . $peso . " Kg</p>";
    }
    ?>
  </nav>

</body>
</html>
