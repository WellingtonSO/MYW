<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Conecta ao banco de dados
  $host = "C:\xampp\htdocs\dashboard\myw";
  $username = "";
  $password = "";
  $database = "bd_myw";

  $conn = new mysqli($host, $username, $password, $database);

  // Verifica se a conexão foi estabelecida com sucesso
  if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
  }

  // Obtém os valores do formulário
  $email = $_POST["email"];
  $senha = $_POST["senha"];

  // Consulta o banco de dados para verificar as credenciais
  $sql = "SELECT * FROM 'login' WHERE email = '$email' AND senha = '$senha'";
  $result = $conn->query($sql);

  // Verifica se encontrou um registro correspondente
  if ($result->num_rows == 1) {
    // Autenticação bem-sucedida
    echo "Login realizado com sucesso!";
    // Você pode redirecionar o usuário para uma página de sucesso ou executar outras ações necessárias
  } else {
    // Autenticação falhou
    echo "E-mail ou senha inválidos!";
    // Você pode exibir uma mensagem de erro ou redirecionar o usuário para uma página de erro
  }

  // Fecha a conexão com o banco de dados
  $conn->close();
}
?>