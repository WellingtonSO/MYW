<!DOCTYPE html>
<html lang="pt-br">
<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Khula&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MYW - Resultados da Busca</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="menu">
    <ul>
      <li><a href="descartes.html">Descartes</a></li>
      <li><a href="dicas.html">Dicas</a></li>
      <li class="entrar"><a href="login.html">Entrar</a></li>
      <li id="userStatus" style="display: none;"></li>
    </ul>
  </nav>

  <div class="resultados-container">
    <h2>Resultados da Busca</h2>
    <div class="resultado">
      <h3>Resultado 1</h3>
      <p>Descrição do resultado 1.</p>
    </div>
    <div class="resultado">
      <h3>Resultado 2</h3>
      <p>Descrição do resultado 2.</p>
    </div>
    <div class="resultado">
      <h3>Resultado 3</h3>
      <p>Descrição do resultado 3.</p>
    </div>
    <!-- Adicione mais resultados conforme necessário -->
    
    <?php
    // Receba os parâmetros da busca da URL
    $tipoPessoa = $_GET['tipo_pessoa'];
    $bairro = $_GET['bairro'];
    $tipoResiduo = $_GET['tipo_residuo'];
    $peso = $_GET['peso'];

    // Execute a lógica de busca e filtragem no backend e obtenha os resultados

    // Exemplo de resultados fictícios
    $resultados = array(
      array(
        'titulo' => 'Resultado 1',
        'descricao' => 'Descrição do resultado 1'
      ),
      array(
        'titulo' => 'Resultado 2',
        'descricao' => 'Descrição do resultado 2'
      ),
      array(
        'titulo' => 'Resultado 3',
        'descricao' => 'Descrição do resultado 3'
      )
    );

    // Exiba os resultados
    foreach ($resultados as $resultado) {
      echo '<div class="resultado">';
      echo '<h3>' . $resultado['titulo'] . '</h3>';
      echo '<p>' . $resultado['descricao'] . '</p>';
      echo '</div>';
    }
    ?>
  </div>
</body>
</html>